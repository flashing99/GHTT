<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\User;
use App\Deliverymen;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

use Gate, DataTables, Redirect, Response, Validator;

class DeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(request()->ajax()) {
            $data = Deliverymen::all();

            //return $data;
            //->withCount('etages as count_etages')
            //->get();

            return Datatables::of($data)
            ->editColumn('created_at', function ($data) 
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            ->addColumn('action', 'clients.action_button')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('clients.index');
        
    }

    //Show form
    public function create(){

        if(Gate::denies('add-clients')){
            return redirect( route('clients.index') );
        }

        return view('clients.create');
    }


    public function store(Request $request){

        $this->validate($request, [
            'lastName'      => ['required', 'string', 'max:100'],
            'firstName'     => ['required', 'string', 'max:100'],
            'mobile1'       => ['required', 'regex:/^(05|06|07)[0-9]{8}$/', 'unique:deliverys'], // Mobile
            'mobile2'       => ['required', 'regex:/^(05|06|07)[0-9]{8}$/', 'unique:deliverys'], // Mobile
            'username'      => ['required', 'string', 'max:100', 'unique:clients'], // Mobile
            //'password'      => ['required', 'string', 'min:8', 'confirmed'], //---> password_confirmation = 'le mot de passe'
            'password'      => ['required', 'string', 'min:8'],
            'c_password'    => ['required', 'same:password'],
            'latitude'      => ['required', 'numeric'],
            'longitude'     => ['required', 'numeric'],
        ]);

        if(Gate::denies('add-deliverymen')){
            return redirect( route('deliverymen.index') );
        }
        
        $data = [
            'lastname'      => $request->lastName,
            'firstname'     => $request->firstName,
            'mobile1'       => $request->mobile1,
            'mobile2'       => $request->mobile2,
            'username'      => $request->username,
            'password'      => bcrypt($request->password),
            'latitude'      => $request->latitude,
            'longitude'     => $request->longitude,
        ];

        $livreur   = Deliverymen::create($data);

        return redirect()->route('deliverymen.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverymen $delivery)
    {
        if(Gate::denies('edit-clients')){
            return redirect( route('clients.index') );
        }
        
        return view('clients.edit')->with([
            'client'  => $delivery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverymen $delivery)
    {
        $delivery->nom        = $request->nom;
        $delivery->adresse    = $request->adresse;
        $delivery->mobile     = $request->mobile;
        $delivery->contact    = $request->contact;

        $delivery->save();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverymen $delivery)
    {
        if(Gate::denies('delete-sites')){
            return redirect( route('home') );
        }

        $delivery->delete();

        return Response::json($delivery);
        //return redirect()->route('admin.users.index');
    }

}