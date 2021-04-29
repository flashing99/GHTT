<?php

namespace App\Http\Controllers\Frontend\Galleries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {


        $galleries = [
            [
                'url' => 'img-1',
                'categories' => ['rooms'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],
            [
                'url' => 'img-2',
                'url-movie' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'movie',
            ],
            [
                'url' => 'img-3',
                'categories' => ['rooms'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],
            [
                'url' => 'img-4',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],
            [
                'url' => 'img-5',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],
            [
                'url' => 'img-6',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],
            [
                'url' => 'img-7',
                'categories' => ['rooms', 'leisure', 'animations', 'restaurants'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',

            ],
            [
                'url' => 'img-8',
                'url-movie' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'movie',
            ],
            [
                'url' => 'img-9',
                'categories' => ['rooms', 'leisure'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],

            [
                'url' => 'img-10',
                'categories' => ['rooms', 'leisure'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],

            [
                'url' => 'img-11',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],

            [
                'url' => 'img-12',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],

            [
                'url' => 'img-13',
                'url-movie' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
                'categories' => ['rooms', 'leisure'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'movie',
            ],
            [
                'url' => 'img-14',
                'categories' => ['leisure', 'animations'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],
            [
                'url' => 'img-15',
                'categories' => ['leisure', 'animations', 'restaurants'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ],
            [
                'url' => 'img-16',
                'categories' => ['leisure', 'animations', 'restaurants'],
                'title' => 'Lorem Ipsum is simply dummy text of the printing',
                'type' => 'image',
            ]


        ];
        return view('frontend.gallery', ['galleries' => $galleries]);
    }
}
