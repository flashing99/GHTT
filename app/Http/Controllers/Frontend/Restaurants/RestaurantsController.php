<?php

namespace App\Http\Controllers\Frontend\Restaurants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function index(Request $request)
    {
        $data = [

            ["name" => "Casbah","type"=>' Le gastro', 'url' => "r1", "count-img" => "6"],
            ["name" => "Panoramique","type"=>' Self', 'url' => "r2", "count-img" => "5"],
            ["name" => "Horse Club","type"=>'Poissons', 'url' => "r1", "count-img" => "3"],
            ["name" => "Typique","type"=>'Traditionnel Algérien', 'url' => "r1", "count-img" => "1"],
            ["name" => "Buvette","type"=>'Buvettes', 'url' => "r5", "count-img" => "2"],
        ];

        /* return view('frontend.restaurants', ['data'=>$data]); */
        return view('frontend.restaurants')->with(['data' => $data]);

    }

    public function show(Request $request)
    {

    }

}
