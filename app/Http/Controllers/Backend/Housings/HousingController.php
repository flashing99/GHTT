<?php

namespace App\Http\Controllers\Backend\Housings;


use App\Models\Housing;
use App\Models\SubcategoryHousing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Traits\UploadTrait;

use Gate, Auth, DataTables, Redirect, Response, Validator;

class HousingController extends Controller
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
            // $data = Housing::all();
            $data = Housing::query();
            $data->with(['views']);

            if ($request->has('subcategory') && !empty($request->subcategory)) {
                $data->where('subcategory_housing_id', $request->subcategory);
            }

            $data->get();

            return Datatables::of($data)


            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            ->addColumn('views', function ($data){
                $views = $data->views;
                

                if($views->count()!=0)
                {
                    $v = '';
                    foreach($views as $view)
                    {
                        $v.= '<span class="badge bg-primary">'.$view->name.'</span>';
                    }

                } else {
                    $v = '<span class="badge bg-danger">Aucune</span>';
                }

                return $v;
            })
            ->addColumn('action', 'Backend.housings.action_button')
            ->rawColumns(['action', 'views', 'online', 'vip'])
            ->addIndexColumn()
            ->make(true);
        }

        $subCategorys = SubcategoryHousing::where('state', '1')->get();

        return view('Backend.housings.index')->with([
            'subcategorys' => $subCategorys
        ]);


    }

    //Show form
    public function create(){

        if(Gate::denies('add-housings')){
            return redirect( route('housings.index') );
        }

        return view('Backend.housings.create');
    }

    public function store(Request $request)
    {

        if(Gate::denies('add-housings')){
            return redirect( route('housings.index') );
        }
/*
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
            return Redirect::to('backoffice/housings/create')->withErrors($validator);
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
*/
        return redirect()->route('housings.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Housing $housing)
    {
        //return $user->communes()->first();
        if(Gate::denies('edit-housings')){
            return redirect( route('housings.index') );
        }

        //$manufacturers = Manufacturer::where('state', '1')->get();
        
        return view('Backend.housings.edit')->with([
            'housing'            => $housing,
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
    public function update(Request $request, Housing $housing)
    {

        if(Gate::denies('edit-housings')){
            return redirect( route('housings.index') );
        }

/*
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
            return Redirect::to('backoffice/housings/'.$housing->id.'/edit')->withErrors($validator);
        }

        //--------------
        $oldImage = $housing->picture;

        $housing->title              = $request->titre;
        $housing->text               = $request->description;
        //$housing->manufacturer_id    = $request->marque;
        $housing->button_text        = $request->texte_bouton;
        $housing->link               = $request->lien;
        $housing->state              = $request->etat;

        $housing->picture            = $request->image_slide;

        if($request->hasFile('image_slide'))
        {
            $Image          = $request->file('image_slide');
            $Image_Name     = $housing->id.'_'.time().'.' . $Image->getClientOriginalExtension();

            // if(!empty($housing->picture))
            // {
            //     $Image_Name     = $housing->picture;
            // }

            $folder         = '/slides/images';  // Define folder path

            // Upload image
            $this->uploadOne($Image, $folder, 'public', $Image_Name);

            $housing->picture     = $Image_Name;

            //Storage::delete('/app/public/slides/images/'.$housing->picture);
            unlink(storage_path('app/public/slides/images/'.$oldImage));
        }

        $housing->save();
*/
        return redirect()->route('housings.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function statusVip(Request $request, Housing $housing)
    {
        $this->validate($request, [
            'etat'  => 'required | integer',
        ]);

        if(Gate::denies('edit-housings')){
            return redirect( route('housings.index') );
        }

        $housing->vip    = $request->etat;

        $housing->save();

        return Response::json($housing->vip);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function statusOnline(Request $request, Housing $housing)
    {
        $this->validate($request, [
            'etat'  => 'required | integer',
        ]);

        if(Gate::denies('edit-housings')){
            return redirect( route('housings.index') );
        }

        $housing->online    = $request->etat;

        $housing->save();

        return Response::json($housing->online);
    }

    /**
     * Remove the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Housing $housing)
    {
        if(Gate::denies('delete-housings')){
            return redirect( route('home') );
        }
/*
        $housing->delete();

        return Response::json($housing);
        //return redirect()->route('admin.users.index');
*/
    }




}