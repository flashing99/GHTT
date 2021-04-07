<?php

namespace App\Http\Controllers\Backend\Galleries;


use App\Models\Gallerie;
use App\Models\CategoryGallerie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Traits\UploadTrait;

use Gate, Auth, DataTables, Redirect, Response, Validator;

class GallerieController extends Controller
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
            $data = Gallerie::all();

            return Datatables::of($data)

            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            //->editColumn('state', 'Backend.sliders.status')
            ->addColumn('action', 'Backend.galleries.action_button')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }


        return view('Backend.galleries.index');


    }

    //Show form
    public function create(){

        if(Gate::denies('add-sliders')){
            return redirect( route('sliders.index') );
        }

        return view('Backend.sliders.create');
    }

    public function store(Request $request)
    {

        if(Gate::denies('add-sliders')){
            return redirect( route('sliders.index') );
        }

        $rules = [
            'titre'                         => ['required','string','max:100'],
            'description'                   => ['required','string','max:200'],
            //'marque'                        => ['required','integer'],
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
            //'marque.required'               => 'Le champ :attribute est obligatoire.',
            'image_slide.required'          => 'Le champ :attribute est obligatoire.',
            'texte_bouton.required'         => 'Le champ :attribute est obligatoire.',
            'texte_bouton.max'              => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            'lien.required'                 => 'Le champ :attribute est obligatoire.',
            'lien.max'                      => 'Le champ :attribute ne doit pas dépasser :max caractères.',
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);


        if($validator->fails()){
            return Redirect::to('backoffice/sliders/create')->withErrors($validator);
        }

        //return dd($request->mobile1);



        // Nombre de slides :
        //-----------------//
        $nbr_slides = Slider::count();

        // Input data user :
        $data = [
            'order'             => $nbr_slides + 1,
            'title'             => $request->titre,
            'text'              => $request->description,
            //'manufacturer_id'   => $manufacturer->id,
            //'picture'   => $request->image,
            'button_text'       => $request->texte_bouton,
            'link'              => $request->lien,
            'state'             => $request->etat,
        ];

        // Add Livreur :
        //-------------------
        $slider   = Slider::create($data);

        if ($request->hasFile('image_slide')) {

            $Image          = $request->file('image_slide');
            $Image_Name     = $slider->id.'_'.time().'.' . $Image->getClientOriginalExtension();
            $folder         = '/slides/images';  // Define folder path

            // Upload image
            $this->uploadOne($Image, $folder, 'public', $Image_Name);

            $slider->picture    = $Image_Name;
            $slider->save();
        }

        return redirect()->route('sliders.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //return $user->communes()->first();
        if(Gate::denies('edit-sliders')){
            return redirect( route('sliders.index') );
        }

        //$manufacturers = Manufacturer::where('state', '1')->get();
        
        return view('Backend.sliders.edit')->with([
            'slider'            => $slider,
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
    public function update(Request $request, Slider $slider)
    {

        if(Gate::denies('edit-sliders')){
            return redirect( route('sliders.index') );
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
            return Redirect::to('admin/sliders/'.$slider->id.'/edit')->withErrors($validator);
        }

        //--------------
        $oldImage = $slider->picture;

        $slider->title              = $request->titre;
        $slider->text               = $request->description;
        //$slider->manufacturer_id    = $request->marque;
        $slider->button_text        = $request->texte_bouton;
        $slider->link               = $request->lien;
        $slider->state              = $request->etat;

        $slider->picture            = $request->image_slide;

        if($request->hasFile('image_slide'))
        {
            $Image          = $request->file('image_slide');
            $Image_Name     = $slider->id.'_'.time().'.' . $Image->getClientOriginalExtension();

            // if(!empty($slider->picture))
            // {
            //     $Image_Name     = $slider->picture;
            // }

            $folder         = '/slides/images';  // Define folder path

            // Upload image
            $this->uploadOne($Image, $folder, 'public', $Image_Name);

            $slider->picture     = $Image_Name;

            //Storage::delete('/app/public/slides/images/'.$slider->picture);
            unlink(storage_path('app/public/slides/images/'.$oldImage));
        }

        $slider->save();

        return redirect()->route('sliders.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function statusUser(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'etat'  => 'required | integer',
        ]);

        if(Gate::denies('edit-sliders')){
            return redirect( route('sliders.index') );
        }

        $slider->state    = $request->etat;

        $slider->save();

        return Response::json($slider->state);
    }

    /**
     * Remove the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if(Gate::denies('delete-sliders')){
            return redirect( route('home') );
        }

        $slider->delete();

        return Response::json($slider);
        //return redirect()->route('admin.users.index');
    }




}

