<?php

namespace App\Http\Controllers\Backend\Bookings;

use App\User;
//use App\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Gate, Auth, DataTables, Redirect, Response;


class BookingsController extends Controller
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


        return view('backend.bookings.index');
    }


    public function create(){

        //$roles = Role::all();

        return view('BackEnd.bookings.create')->with([
//            'user' => $user,
//            'roles' => $roles
        ]);
    }





}
