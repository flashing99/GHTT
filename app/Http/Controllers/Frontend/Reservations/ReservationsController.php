<?php

namespace App\Http\Controllers\Frontend\Reservations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class ReservationsController extends Controller
{
    public function index()
    {
//        $step=1;
//        if(is_null($step)) redirect('/');
//         return view('frontend.reservation', ['step'=>$step]  );

    }



    //======================= Show  bookink form  =======================
    public function show($step)
    {
        // dd($step);
        return view('frontend.reservation', ['step'=>$step]);
    }


    //======================= Find Rooms ======================
    public function find(Request $request, $step)
    {
        dd($step);
       dd($request);
        $request->validate([
                "arrive" => "required|date",
                "departure" => "required|date",
                "type" => "required",
                "adults" => "required",
                "children" => "required",
            ]);

        $arrive = $request->input('arrive');
        $departure = $request->input('departure');
        $type = $request->input('type');
        $adults = $request->input('adults');
        $children = $request->input('children');

        //----- Add data to global session---------------
      //  dd($arrive.' / '.$departure.' / '.$type.' / '.$adults.' / '.$children);
        session([
            'arrive' => $arrive,
            'departure' => $departure,
            'type' => $type,
            'adults' => $adults,
            'children' => $children
            ]);

        // return view('frontend.reservation' )->with( ['step'=>$step]);
        /* $returnHTML = view('frontend.reservation')->with(['step'=>$step])->render();
         return response()->json(array('success' => true, 'html'=>$returnHTML));*/
        //return redirect()->route('reservation-step', ['step' => 2]);
       // return Route::redirect('/reservations', '2');


       //return   Redirect::route('reservation-step-2',$step );
       // return view('frontend.reservation')->with(['step' => $step]);
    }


    //======================= Check availability=======================

    public function check(Request $request, $step){

        $data = $request->session()->all();
        // dump($data);

     return view('frontend.reservation')->with(['step' => $step]);
       // Redirect::route('reservation-step-3',$step );


    }

/*    public function search(Request  $request)
    {


        //return view('frontend.reservation', ['step'=>0]);
//       $req = response()->json($request);
//       return $req;
        $col=9;
        return response()->json( $col  );

//        $step=1;
//        if(is_null($step)) redirect('/');
        // return view('frontend.reservation', ['step'=>3], ['request'=>$req]  );
        //return  redirect(route('reservation',2 ));

    }*/


}
