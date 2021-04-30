<?php

namespace App\Http\Controllers\Frontend\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Gallerie;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
       /* $galleries =Gallerie::all();
        dd( $galleries);*/

       /* 0 => "title"
        1 => "name"
        2 => "type"
        3 => "description"
        4 => "state"
        5 => "category_gallerie_id"*/

       /* "id" => 2
        "title" => "test02 2"
        "name" => "2_1619173828.jpg"
        "type" => "1"
        "description" => "aa"
        "state" => "1"
        "category_gallerie_id" => 1
        "created_at" => "2021-04-22 14:35:12"
        "updated_at" => "2021-04-23 10:30:28"
        "deleted_at" => null*/

      /*  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, rerum.*/

        $galleries = [
            [
                'url' => 'img-1',
                'urlMovie' =>'',
                'categories' => ['rooms'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],
            [
                'url' => 'img-2',
                'urlMovie' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '2',
            ],
            [
                'url' => 'img-3',
                'urlMovie' =>'',
                'categories' => ['rooms'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],
            [
                'url' => 'img-4',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],
            [
                'url' => 'img-5',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],
            [
                'url' => 'img-6',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],
            [
                'url' => 'img-7',
                'urlMovie' =>'',
                'categories' => ['rooms', 'leisure', 'animations', 'restaurants'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',

            ],
            [
                'url' => 'img-8',
                'urlMovie' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'movie',
            ],
            [
                'url' => 'img-9',
                'urlMovie' =>'',
                'categories' => ['rooms', 'leisure'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],

            [
                'url' => 'img-10',
                'urlMovie' =>'',
                'categories' => ['rooms', 'leisure'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],

            [
                'url' => 'img-11',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],

            [
                'url' => 'img-12',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],

            [
                'url' => 'img-13',
                'urlMovie' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
                'categories' => ['rooms', 'leisure'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '2',
            ],
            [
                'url' => 'img-14',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],
            [
                'url' => 'img-15',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations', 'restaurants'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ],
            [
                'url' => 'img-16',
                'urlMovie' =>'',
                'categories' => ['leisure', 'animations', 'restaurants'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => '1',
            ]


        ];
        return view('frontend.gallery', ['galleries' => $galleries]);
    }
}
