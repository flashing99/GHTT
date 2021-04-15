<?php

namespace App\Http\Controllers\Backend\Bookings;

use App\Models\Booking;
use App\Models\Housing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

use Carbon\Carbon;
use Gate, Auth, DataTables, Redirect, Response;


class BookingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if(request()->ajax()) {
            $data = Booking::query();
            $data->with(['BookingDetail']);
            $data->get();
            // $data = Housing::query();
            // $data->with(['views']);
            // $data->get();

            return Datatables::of($data)

            ->addColumn('adult', function ($data)
            {
                return $data->BookingDetail->adult;
            })
            ->addColumn('children', function ($data)
            {
                return $data->BookingDetail->children;
            })
            ->addColumn('logement', function ($data)
            {
                return $data->BookingDetail->housing_name.' ('.$data->BookingDetail->number.')';
            })
            ->addColumn('date_start', function ($data)
            {
                return $data->BookingDetail->date_start;
            })
            ->addColumn('date_end', function ($data)
            {
                return $data->BookingDetail->date_end;
            })
            
            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            //->editColumn('state', 'Backend.housings.status')
            ->addColumn('action', 'Backend.bookings.action_button')
            ->rawColumns(['action', 'state'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.bookings.index');
    }

/*
    public function index()
    {
        if(request()->ajax()) {
            
            $data = Housing::query();
            $data->with(['views']);
            $data->get();

            return Datatables::of($data)

            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            //->editColumn('state', 'Backend.housings.status')
            ->addColumn('action', 'Backend.bookings.action_button')
            ->rawColumns(['action', 'state'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.bookings.index');
    }
*/
//--------------------------------------------------------------
/*
    public function ___searchRoom(Request $request)
    {
        $rooms = null;
        if($request->filled(['start_time', 'end_time', 'capacity'])) {
            $times = [
                Carbon::parse($request->input('start_time')),
                Carbon::parse($request->input('end_time')),
            ];

            $rooms = Room::where('capacity', '>=', $request->input('capacity'))
                ->whereDoesntHave('events', function ($query) use ($times) {
                    $query->whereBetween('start_time', $times)
                        ->orWhereBetween('end_time', $times)
                        ->orWhere(function ($query) use ($times) {
                            $query->where('start_time', '<', $times[0])
                                ->where('end_time', '>', $times[1]);
                        });
                })
                ->get();
        }

        return view('admin.bookings.search', compact('rooms'));
    }
*/
    //---

    public function searchRoomForm(){

        // $roles = Role::all();

        return view('BackEnd.bookings.searchroom')->with([
//            'user' => $user,
//            'roles' => $roles
        ]);
    }

    public function searchRoom(Request $request)
    {

        if(Gate::denies('add-sliders')){
            return redirect( route('sliders.index') );
        }

        $rules = [
            'start_date'                    => ['required','date'],
            'end_date'                      => ['required','date'],
            //'adult'                         => ['required','integer', 'min:1'],
            //'children'                      => ['required','integer', 'min:0'],
            
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

//return 'ok1';
        if($validator->fails()){
            return Redirect::to('/backoffice/search/room')->withErrors($validator);
        }

        //return 'ok';
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

            ->whereDoesntHave('bookings', function ($query) use ($times) {
                $query->whereBetween('date_start', $times)
                        ->orWhereBetween('date_end', $times)
                        ->orWhere(function ($query) use ($times) {
                            $query->where('date_start', '<', $times[0])
                                ->where('date_end', '>', $times[1]);
                        });
            })
            ->with(['subcategoryHousing', 'views'])//->distinct()
            
            
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
        


            // foreach($rooms as $key => $room)
            // {
            //     $chambres[$key]['HousingId'] = $room->id;
            //     $chambres[$key]['categoryName'] = $room->subcategoryHousing->name;
                
            //     foreach($room->views as $i => $view)
            //     {
            //         $chambres[$key][$i]['view'] = $view->name;
            //     }
                
            // }
            $categorys = array();

            foreach($rooms as $key => $room)
            {
                $chambres[$key]['HousingId']    = $room->id;
                $chambres[$key]['categoryId']   = $room->subcategoryHousing->id;
                $chambres[$key]['categoryName'] = $room->subcategoryHousing->name;
                
                if($room->views->count()!=0)
                {
                    foreach($room->views as $i => $view)
                    {
                        $chambres[$key]['views'][] = $view->name;
                    }
                } else {
                    $chambres[$key]['views'][] = '';
                }
                
                if(!in_array($room->subcategoryHousing->id, $categorys))
                {
                    $categorys[] = $room->subcategoryHousing->id;
                }
                
            }




            foreach($categorys as $k => $category)
            {
                $cats = collect($chambres)->where('categoryId', $category);

                $catViews[$k] = array();
                $catViews[$k]['views'] = array();

                foreach($cats as $i => $cat)
                {
                    $catViews[$k]['name'] = $cat['categoryName'];
                    
                    foreach($cat['views'] as $j => $view)
                    {
                        
                        if(!in_array($view, $catViews[$k]['views']) && !empty($view))
                        {
                            $catViews[$k]['views'][] = $view;
                        }
                        
                    }


                }
            }
            return $catViews;



            // $chambres = array();
            // $category = array();

            // foreach($rooms as $key => $room)
            // {
            //     if(!in_array($room->subcategoryHousing->name, $category))
            //     {
            //         $category[] = $room->subcategoryHousing->name;

            //         foreach($room->views as $i => $view)
            //         {
            //             $category[][$i]['view'] = $view->name;
            //         }
            //     }
                

            //     $chambres[$key]['HousingId'] = $room->id;
            //     $chambres[$key]['categoryName'] = $room->subcategoryHousing->name;
                
                
            // }

            //$collection = collect([1, 2, 3]);

        //return collect($chambres);//->distinct('HousingId');

        //return $category;

        //return collect($chambres)->where('categoryId', 4);

        //return $chambres;
        //return $rooms;


        //return view('admin.bookings.search', compact('rooms'));
    }
//------------------------

    
    public function create(){

        //$roles = Role::all();

        return view('BackEnd.bookings.create')->with([
//            'user' => $user,
//            'roles' => $roles
        ]);
    }





}
