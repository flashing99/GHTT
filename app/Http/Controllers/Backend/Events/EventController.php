<?php

namespace App\Http\Controllers\Backend\Events;

use App\Models\Event;
//use App\Models\Manufacturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Traits\UploadTrait;

use Gate, Auth, DataTables, Redirect, Response, Validator;

class EventController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax()) {
            $data = Event::all();
            /*
                $data = Dealer::query();
                $data->with(['fullLocality']);
                $data->get();
            */

            return Datatables::of($data)

            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            //->editColumn('state', 'Backend.events.status')
            ->addColumn('action', 'Backend.events.action_button')
            //->rawColumns(['action', 'state'])
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        // return view('dealers.users.index')->with([
        //     'wilayas'  => $wilayas,
        // ]);

        return view('Backend.events.index');


    }

    //Show form
    public function create(){

        if(Gate::denies('add-events')){
            return redirect( route('events.index') );
        }

        //$manufacturers = Manufacturer::where('state', '1')->get();

        return view('Backend.events.create');//->with(['manufacturers' => $manufacturers]);
    }

    public function store(Request $request)
    {

        if(Gate::denies('add-events')){
            return redirect( route('events.index') );
        }

        $rules = [
            'titre'                         => ['required','string','max:100'],
            'description'                   => ['required','string','max:200'],
            'marque'                        => ['required','integer'],
            'image_slide'                   => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'texte_bouton'                  => ['required','string','max:50'],
            'lien'                          => ['required','string','max:255'],
            'etat'                          => ['nullable', 'regex:/^[0-1]/'],
        ];

        $customMessages = [
            'titre.required'                => 'Le champ :attribute est obligatoire.',
            'titre.max'                     => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'description.required'          => 'Le champ :attribute est obligatoire.',
            'description.max'               => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'marque.required'               => 'Le champ :attribute est obligatoire.',
            'email.required'                => 'Le champ :attribute est invalide.',
            'image_slide.required'          => 'Le champ :attribute est obligatoire.',
            'texte_bouton.required'         => 'Le champ :attribute est obligatoire.',
            'texte_bouton.max'              => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'lien.required'                 => 'Le champ :attribute est obligatoire.',
            'lien.max'                      => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);


        if($validator->fails()){
            return Redirect::to('backoffice/events/create')->withErrors($validator);
        }

        //return dd($request->mobile1);

        // Logo de la marque :
        //------------------//
        $manufacturer = Manufacturer::find($request->marque);


        // Nombre de slides :
        //-----------------//
        $nbr_slides = Slider::count();

        // Input data user :
        $data = [
            'order'             => $nbr_slides + 1,
            'title'             => $request->titre,
            'text'              => $request->description,
            'manufacturer_id'   => $manufacturer->id,
            //'picture'   => $request->image,
            'button_text'       => $request->texte_bouton,
            'link'              => $request->lien,
            'state'             => $request->etat,
        ];

        // Add Livreur :
        //-------------------
        $event   = Event::create($data);

        if ($request->hasFile('image_slide')) {

            $Image          = $request->file('image_event');
            $Image_Name     = $event->id.'_'.time().'.' . $Image->getClientOriginalExtension();
            $folder         = '/events/images';  // Define folder path

            // Upload image
            $this->uploadOne($Image, $folder, 'public', $Image_Name);

            $event->picture    = $Image_Name;
            $event->save();
        }

        return redirect()->route('events.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //return $user->communes()->first();
        if(Gate::denies('edit-events')){
            return redirect( route('events.index') );
        }

        //$manufacturers = Manufacturer::where('state', '1')->get();
        
        return view('Backend.events.edit')->with([
            'event'            => $event,
            //'manufacturers'     => $manufacturers
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {

        if(Gate::denies('edit-events')){
            return redirect( route('events.index') );
        }

        $rules = [
            'titre'                         => ['required','string','max:100'],
            'description'                   => ['required','string','max:200'],
            'marque'                        => ['required','integer'],
            'image_slide'                   => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'texte_bouton'                  => ['required','string','max:50'],
            'lien'                          => ['required','string','max:255'],
            'etat'                          => ['nullable', 'regex:/^[0-1]/'],
        ];

        $customMessages = [
            'titre.required'                => 'Le champ :attribute est obligatoire.',
            'titre.max'                     => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'description.required'          => 'Le champ :attribute est obligatoire.',
            'description.max'               => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'marque.required'               => 'Le champ :attribute est obligatoire.',
            'email.required'                => 'Le champ :attribute est invalide.',
            'image_slide.image'             => 'Vous devez choisir une image.',
            'image_slide.mimes'             => 'Vous devez introduire une image de type :mimes.',
            'texte_bouton.required'         => 'Le champ :attribute est obligatoire.',
            'texte_bouton.max'              => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'lien.required'                 => 'Le champ :attribute est obligatoire.',
            'lien.max'                      => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);


        if($validator->fails()){
            return Redirect::to('backoffice/events/'.$event->id.'/edit')->withErrors($validator);
        }

        //--------------
        $oldImage = $slider->picture;

        $event->title              = $request->titre;
        $event->text               = $request->description;
        $event->manufacturer_id    = $request->marque;
        $event->button_text        = $request->texte_bouton;
        $event->link               = $request->lien;
        $event->state              = $request->etat;

        $event->picture            = $request->image_event;

        if($request->hasFile('image_event'))
        {
            $Image          = $request->file('image_event');
            $Image_Name     = $event->id.'_'.time().'.' . $Image->getClientOriginalExtension();

            // if(!empty($slider->picture))
            // {
            //     $Image_Name     = $slider->picture;
            // }

            $folder         = '/events/images';  // Define folder path

            // Upload image
            $this->uploadOne($Image, $folder, 'public', $Image_Name);

            $event->picture     = $Image_Name;

            //Storage::delete('/app/public/slides/images/'.$slider->picture);
            unlink(storage_path('app/public/events/images/'.$oldImage));
        }

        $event->save();

        return redirect()->route('events.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function statusUser(Request $request, Event $event)
    {
        $this->validate($request, [
            'etat'  => 'required | integer',
        ]);

        if(Gate::denies('edit-events')){
            return redirect( route('events.index') );
        }

        $event->state    = $request->etat;

        $event->save();

        return Response::json($event->state);
    }

    /**
     * Remove the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if(Gate::denies('delete-events')){
            return redirect( route('home') );
        }

        $event->delete();

        return Response::json($event);
        //return redirect()->route('admin.users.index');
    }




}
