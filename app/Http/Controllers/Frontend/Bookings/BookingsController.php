<?php

namespace App\Http\Controllers\Frontend\Bookings;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Housing;
use App\Models\SubcategoryHousing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

use Carbon\Carbon;
use Gate, Auth, DataTables, Redirect, Response;


class BookingsController extends Controller
{

    //---
    public function reserveForm(Request $request){

        return $request->type.', '.$request->view;
        

        $categorys = SubcategoryHousing::where('state', '1')->get();

        return view('Frontend.bookings.bookitForm')->with([
            'categorys' => $categorys
        ]);
    }

    //---
    public function searchRoomForm(){

        $categorys = SubcategoryHousing::where('state', '1')->get();

        return view('Frontend.bookings.searchroom')->with([
            'categorys' => $categorys
        ]);
    }

    public function searchRoom(Request $request)
    {

        $rules = [
            'start_date'                    => ['required', 'date'],
            'end_date'                      => ['required', 'date'],
            'category'                      => ['required', 'integer'],
            'adult'                         => ['nullable', 'integer'],
            'children'                      => ['nullable', 'integer'],

        ];

        // $customMessages = [
        //     'titre.required'                => 'Le champ :attribute est obligatoire.',
        //     'titre.max'                     => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        //     'description.required'          => 'Le champ :attribute est obligatoire.',
        //     'description.max'               => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        //     'marque.required'               => 'Le champ :attribute est obligatoire.',
        //     'email.required'                => 'Le champ :attribute est invalide.',
        //     'image_slide.required'          => 'Le champ :attribute est obligatoire.',
        //     'texte_bouton.required'         => 'Le champ :attribute est obligatoire.',
        //     'texte_bouton.max'              => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        //     'lien.required'                 => 'Le champ :attribute est obligatoire.',
        //     'lien.max'                      => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        // ];
        //$validator = Validator::make($request->all(), $rules, $customMessages);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('/search/room')->withErrors($validator);
        }

        //return 'ok';
        $category   = $request->category;
        $start_date = $request->start_date;
        $end_date   = $request->end_date;

        // $start_date = '2021-04-14';
        // $end_date   = '2021-04-15';

        $times = [
            Carbon::parse($start_date),
            Carbon::parse($end_date),
        ];

        $rooms = Housing::where('online', 1)
        // ->with(['Bookings'])
        // ->whereHas('bookings')
        // ->whereDoesntHave('bookings')

        //if ($request->has('category') && !empty($category)) {
        ->where('subcategory_housing_id', $category)
            //}

            ->whereDoesntHave('bookings', function ($query) use ($times) {
                $query->whereBetween('date_start', $times)
                    ->orWhereBetween('date_end', $times)
                    ->orWhere(function ($query) use ($times) {
                        $query->where('date_start', '<', $times[0])
                            ->where('date_end', '>', $times[1]);
                    });
            })
            ->with(['subcategoryHousing', 'views']) //->distinct()


            /*
                ->whereDoesntHave('events', function ($query) use ($times) {
                    $query->whereBetween('start_time', $times)
                        ->orWhereBetween('end_time', $times)
                        ->orWhere(function ($query) use ($times) {
                            $query->where('start_time', '<', $times[0])
                                ->where('end_time', '>', $times[1]);
                        });
                })
            */

            ->get();

        //return $rooms;

        $lesvues = array();

        foreach ($rooms as $key => $room)
        {
            if ($room->views->count() > 0)
            {
                foreach ($room->views as $i => $view)
                {
                    if (!in_array($view->name, $lesvues))
                    {
                        //$lesvues[] = array('id' => $view->id, 'name' => $view->name);
                        $idvues[] = $view->id;
                        $lesvues[] = $view->name;

                        $lesviews[] = array('id'=>$view->id, 'name'=>$view->name);
                    }
                }
            }
        }

        //return $idvues;
        //return $lesvues;

        $serviceIds = array();

        foreach ($rooms as $key => $room) {

            //$chambres[$key]['countviews']        = $room->views->count();

            if ($room->views->count() > 0)
            {



                //foreach ($room->views as $i => $view)
                //{
                    //$chambres[$key]['HousingId']    = $room->id;
                    $chambres['typeId']       = $room->subcategoryHousing->id;
                    $chambres['typeName']     = $room->subcategoryHousing->name;
                    $chambres['description']  = $room->subcategoryHousing->description;
                    $chambres['image']        = $room->subcategoryHousing->image;
                    $chambres['price']        = $room->subcategoryHousing->price;

                    $services = $room->subcategoryHousing->services;
                    foreach($services as $service)
                    {
                        if(!in_array($service->id, $serviceIds))
                        {
                            $serviceIds[] = $service->id;
                            $chambres['services'][]        = array('id' => $service->id, 'name' => $service->name);
                        }
                        
                    }
                    

                    //$chambres[$key]['viewsID'] = $view->id;
                    //$chambres[$key]['views'] = $view->name;
                //}
            }

        }




        $beng = array();

        foreach ($lesvues as $j => $lavue)
        {
            //$chambres['vue'] = $lavue;
            $chambres['vue'] = $lesviews[$j]['name'];
            $chambres['vueid'] = $lesviews[$j]['id'];

            $beng[] = $chambres;
        }        
        
        //return $chambres;
        //return $beng;
        //$collection = collect($beng);

        $collection = new Collection();
        foreach($beng as $item)
        {
            $collection->push((object)[
                'typeId' => $item['typeId'],
                'typeName' => $item['typeName'],
                'description' => $item['description'],
                'image' => $item['image'],
                'price' => $item['price'],
                'vueid' => $item['vueid'],
                'vue' => $item['vue'],
                'services' => $item['services'],
            ]);
        }

        //return $collection;
        //
        return view('frontend.bookings.search')->with(['bengs' => $collection]);
    }
//------------------------

    





}
