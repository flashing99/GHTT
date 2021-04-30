<?php

namespace App\Http\Controllers\Backend\Galleries;


use App\Models\Gallerie;
use App\Models\CategoryGallerie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Traits\UploadTrait;

use Gate, Auth, DataTables, Redirect, Response, Validator, Image;

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
            $data = Gallerie::query();
            $data->with(['CategoryGallerie']);

            if ($request->has('categorie') && !empty($request->categorie)) {
                $data->where('category_gallerie_id', $request->categorie);
            }
            if ($request->has('type') && !empty($request->type)) {
                $data->where('type', $request->type);
            }

            $data->get();

            return Datatables::of($data)

            ->editColumn('categorie', function ($data) {

                return $data->CategoryGallerie->name;
            })
            ->editColumn('media', function ($data)
            {
                if($data->type==2){

                    $media = '<a href="'. $data->name. '" target="_blank" class="btn btn-block btn-secondary"><i class="fas fa-play"></i></a>';

                } else {
                    //$media = '<img src=\''.$data->name.'\' height=\'50\'/>';
                    $media = '<img class="img-thumbnail img-md" src="' . url("backoffice/galleries/images/thumbnail/" . $data->name) . '" />';
                }

                return $media;
                //return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            ->editColumn('type', function ($data)
            {
                if($data->type==2){
                    $type = 'Video';
                } else {
                    $type = 'Image';
                }

                return $type;
                //return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            //->editColumn('state', 'Backend.sliders.status')
            ->addColumn('action', 'Backend.galleries.action_button')
            ->rawColumns(['action', 'media'])
            ->addIndexColumn()
            ->make(true);
        }

        $categories = CategoryGallerie::all();

        return view('Backend.galleries.index')->with([
            'categories' => $categories
        ]);


    }

    //Show form
    public function create(){

        if(Gate::denies('add-galleries')){
            return redirect( route('galleries.index') );
        }

        $categories = CategoryGallerie::where('state', '1')->get();

        return view('Backend.galleries.create')->with([
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {


        if(Gate::denies('add-galleries')){
            return redirect( route('galleries.index') );
        }

        //--
         $rules         = [ 'type'          => ['required', 'integer'] ];
        $customMessages = [ 'type.required' => 'Le champ :attribute est obligatoire.' ];

        $validator = Validator::make($request->all(), $rules, $customMessages);

        if($validator->fails()) {
            return Redirect::to('backoffice/galleries/create')->withErrors($validator);
        }


        if($request->type==1)
        {

            $rules = [
                'categorie'                     => ['required', 'exists:category_galleries,id'],
                'titre'                         => ['required', 'string', 'max:100'],
                'description'                   => ['nullable', 'string'],
                'image_gallerie'                => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                'url'                           => ['nullable','string'],
                'etat'                          => ['nullable', 'regex:/^[0-1]/'],
            ];

            $customMessages = [
                'categorie.required'            => 'Le champ :attribute est obligatoire.',
                'categorie.exists'              => 'La valeur du champ :attribute est invalide.',
                'titre.required'                => 'Le champ :attribute est obligatoire.',
                'titre.max'                     => 'Le champ :attribute ne doit pas dépasser :max caractères.',
                //'description.required'          => 'Le champ :attribute est obligatoire.',
                'image_gallerie.required'       => 'Le champ :attribute est obligatoire.',
            ];

            $name = null;

        } else {

            $rules = [
                'categorie'                     => ['required', 'exists:category_galleries,id'],
                'titre'                         => ['required', 'string', 'max:100'],
                'description'                   => ['nullable', 'string'],
                'image_gallerie'                => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'url'                           => ['required','string','max:255'],
                'etat'                          => ['nullable', 'regex:/^[0-1]/'],
            ];

            $customMessages = [
                'categorie.required'            => 'Le champ :attribute est obligatoire.',
                'categorie.exists'              => 'La valeur du champ :attribute est invalide.',
                'titre.required'                => 'Le champ :attribute est obligatoire.',
                'titre.max'                     => 'Le champ :attribute ne doit pas dépasser :max caractères.',
                //'description.required'          => 'Le champ :attribute est obligatoire.',
                'url.required'                  => 'Le champ :attribute est obligatoire.',
                'url.max'                       => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            ];

            $name = $request->url;
        }

        $validator = Validator::make($request->all(), $rules, $customMessages);

        if($validator->fails()){
            return Redirect::to('backoffice/galleries/create')->withErrors($validator);
        }

        //return dd($request);



        $categories[] = $request->categorie;

        // Input media data :
        $data = [
            'title'                 => $request->titre,
            'name'                  => $name,
            'type'                  => $request->type,
            'description'           => $request->description,
            'category_gallerie_id'  => $request->categorie,
           /* 'category_gallerie_id'  =>  json_encode($categories),*/

            'state'                 => $request->etat,
        ];



        // Add media :
        //-------------------
        $gallerie   = Gallerie::create($data);

        if ($request->hasFile('image_gallerie')) {

            $Image              = $request->file('image_gallerie');
            $Image_Name         = $gallerie->id.'_'.time().'.' . $Image->getClientOriginalExtension();
            $folder             = '/gallerie/images';  // Define folder path
            $folderThumbnail    = '/gallerie/images/thumbnail';  // Define folder path

            // Upload image
            $this->uploadOne($Image, $folder, 'public', $Image_Name);
            $this->uploadOne($Image, $folderThumbnail, 'public', $Image_Name);

            //create small thumbnail
            $smallthumbnailpath = storage_path('app/public/gallerie/images/thumbnail/' . $Image_Name);
            $this->createThumbnail($smallthumbnailpath, 136, 136);

            $gallerie->name    = $Image_Name;
            $gallerie->save();
        }

        return redirect()->route('galleries.index');
    }

    /**
     * Create a thumbnail of specified size
     *
     * @param string $path path of thumbnail
     * @param int $width
     * @param int $height
     */
    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallerie $gallery)
    {
        //return $user->communes()->first();
        if(Gate::denies('edit-galleries')){
            return redirect( route('galleries.index') );
        }

        //$manufacturers = Manufacturer::where('state', '1')->get();
        $categories = CategoryGallerie::where('state', '1')->get();

        return view('Backend.galleries.edit')->with([
            'gallery'       => $gallery,
            'categories'    => $categories
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallerie $gallery)
    {

        if(Gate::denies('edit-galleries')){
            return redirect( route('galleries.index') );
        }

        //--
        $rules         = ['type'          => ['required', 'integer']];
        $customMessages = ['type.required' => 'Le champ :attribute est obligatoire.'];

        $validator = Validator::make($request->all(), $rules, $customMessages);

        if ($validator->fails()) {
            return Redirect::to('backoffice/galleries/create')->withErrors($validator);
        }


        if ($request->type == 1) {

            $rules = [
                'categorie'                     => ['required', 'exists:category_galleries,id'],
                'titre'                         => ['required', 'string', 'max:100'],
                'description'                   => ['nullable', 'string'],
                'image_gallerie'                => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
                'url'                           => ['nullable', 'string'],
                'etat'                          => ['nullable', 'regex:/^[0-1]/'],
            ];

            $customMessages = [
                'categorie.required'            => 'Le champ :attribute est obligatoire.',
                'categorie.exists'              => 'La valeur du champ :attribute est invalide.',
                'titre.required'                => 'Le champ :attribute est obligatoire.',
                'titre.max'                     => 'Le champ :attribute ne doit pas dépasser :max caractères.',
                //'description.required'          => 'Le champ :attribute est obligatoire.',
                'image_gallerie.required'       => 'Le champ :attribute est obligatoire.',
            ];

        } else {

            $rules = [
                'categorie'                     => ['required', 'exists:category_galleries,id'],
                'titre'                         => ['required', 'string', 'max:100'],
                'description'                   => ['nullable', 'string'],
                'image_gallerie'                => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
                'url'                           => ['required', 'string', 'max:255'],
                'etat'                          => ['nullable', 'regex:/^[0-1]/'],
            ];

            $customMessages = [
                'categorie.required'            => 'Le champ :attribute est obligatoire.',
                'categorie.exists'              => 'La valeur du champ :attribute est invalide.',
                'titre.required'                => 'Le champ :attribute est obligatoire.',
                'titre.max'                     => 'Le champ :attribute ne doit pas dépasser :max caractères.',
                //'description.required'          => 'Le champ :attribute est obligatoire.',
                'url.required'                  => 'Le champ :attribute est obligatoire.',
                'url.max'                       => 'Le champ :attribute ne doit pas dépasser :max caractères.',
            ];

        }

        $validator = Validator::make($request->all(), $rules, $customMessages);

        if($validator->fails()){
            return Redirect::to('backoffice/galleries/'.$gallery->id.'/edit')->withErrors($validator);
        }

        //--------------
        $oldType    = $gallery->type;
        if($oldType==1)
        {
            $oldImage   = $gallery->name;
        }


        $gallery->title                 = $request->titre;
        $gallery->type                  = $request->type;
        $gallery->description           = $request->description;
        $gallery->category_gallerie_id  = $request->categorie;
        $gallery->state                 = $request->etat;

        // Video Youtube :
        if($request->type==2)
        {
            $gallery->name  = $request->url;

            if ($oldType == 1) {
                unlink(storage_path('app/public/gallerie/images/' . $oldImage));
                unlink(storage_path('app/public/gallerie/images/thumbnail/' . $oldImage));
            }

        // Image :
        } else {

            if ($request->hasFile('image_gallerie')) {
                $Image          = $request->file('image_gallerie');
                $Image_Name     = $gallery->id . '_' . time() . '.' . $Image->getClientOriginalExtension();

                $folder             = '/gallerie/images';  // Define folder path
                $folderThumbnail    = '/gallerie/images/thumbnail';  // Define folder path

                // Upload image
                $this->uploadOne($Image, $folder, 'public', $Image_Name);
                $this->uploadOne($Image, $folderThumbnail, 'public', $Image_Name);

                //create small thumbnail
                $smallthumbnailpath = storage_path('app/public/gallerie/images/thumbnail/' . $Image_Name);
                $this->createThumbnail($smallthumbnailpath, 136, 136);

                $gallery->name     = $Image_Name;

                if ($oldType == 1) {
                    unlink(storage_path('app/public/gallerie/images/' . $oldImage));
                    unlink(storage_path('app/public/gallerie/images/thumbnail/' . $oldImage));
                }
            }

        }



        $gallery->save();



        return redirect()->route('galleries.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function statusMedia(Request $request, Gallerie $gallery)
    {
        $this->validate($request, [
            'etat'  => 'required | integer',
        ]);

        if(Gate::denies('edit-galleries')){
            return redirect( route('galleries.index') );
        }

        $gallery->state    = $request->etat;

        $gallery->save();

        return Response::json($gallery->state);
    }

    /**
     * Remove the specified resource.
     *
     * @param  \App\Deliverymen  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallerie $gallery)
    {
        if(Gate::denies('delete-galleries')){
            return redirect( route('home') );
        }

        $gallery->delete();

        return Response::json($gallery);
        //return redirect()->route('admin.users.index');
    }


    //
    public function displayImage($filename)
    {

        //$path = storage_public('products/images/' . $filename);
        $path = storage_path('app/public/gallerie/images/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }


    public function displayThumbnailImage($filename)
    {

        //$path = storage_public('products/images/' . $filename);
        $path = storage_path('app/public/gallerie/images/thumbnail/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }


}

