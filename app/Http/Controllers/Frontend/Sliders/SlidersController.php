<?php

namespace App\Http\Controllers\Frontend\Sliders;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\View;
use Illuminate\Http\Request;

class SlidersController extends Controller
{

    public function index(){



        $slides = Slider::all();
        return view('Frontend.home.slider', ['slides'=>$slides]);
          // dd($data);
       /* foreach ($data as $item){

         dd($item->picture);

        }*/
        /* if(request()->ajax()) {
             $data = Slider::all();

             return Datatables::of($data)

                 ->editColumn('created_at', function ($data)
                 {
                     return date('d-m-Y à H:i', strtotime($data->created_at) );
                 })
                 //->editColumn('state', 'Backend.sliders.status')
                 ->addColumn('action', 'Backend.sliders.action_button')
                 ->rawColumns(['action'])
                 ->addIndexColumn()
                 ->make(true);
         }


         return view('Backend.sliders.index');*/
    }

}
