<?php

namespace App\Http\Controllers\Backend\Galleries;

use Gate, DataTables, Redirect, Response, Image;

use App\Models\Product;
use App\Models\Famille;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Traits\UploadTrait;

class ImageController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }



    //Show form
    public function createThumbnails()
    {

        $thumbnailsListe  = [];
        $path   = storage_path('app/public/gallerie/images/thumbnail');
        $files  = File::files($path);

        foreach($files as $i => $path)
        {
            $pathinfo = pathinfo($path);

            //return $pathinfo['dirname'].'/'.$pathinfo['basename'];

            //$liste[]    = pathinfo($path);
            //$Image_Name = $pathinfo['basename'];
            $smallthumbnailpath = $pathinfo['dirname'].'/'.$pathinfo['basename'];
            
            $thumbnailsListe[]  = $smallthumbnailpath;

            $this->createThumbnail($smallthumbnailpath, 136, 136);
        }



        //dd($liste);



        return view('Backend.galleries.thumbnail')->with([
            'thumbnails' => $thumbnailsListe,
        ]);
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




}