<?php

namespace App\Http\Controllers\Backend\Bookings;

use App\Models\Booking;
use App\Models\Housing;

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
    public function index000000()
    {
        if(request()->ajax()) {
            $data = Booking::all();
            
            // $data = Housing::query();
            // $data->with(['views']);
            // $data->get();

            return Datatables::of($data)

            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            //->editColumn('state', 'Backend.housings.status')
            ->addColumn('action', 'Backend.bookings.action_button')
            ->rawColumns(['action', 'state'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.bookings.index');
    }

    public function index()
    {
        if(request()->ajax()) {
            
            $data = Housing::query();
            $data->with(['views']);
            $data->get();

            return Datatables::of($data)

            ->editColumn('created_at', function ($data)
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            //->editColumn('state', 'Backend.housings.status')
            ->addColumn('action', 'Backend.bookings.action_button')
            ->rawColumns(['action', 'state'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.bookings.index');
    }

//--------------------------------------------------------------
    public function searchRoom(Request $request)
    {
        $rooms = null;
        if($request->filled(['start_time', 'end_time', 'capacity'])) {
            $times = [
                Carbon::parse($request->input('start_time')),
                Carbon::parse($request->input('end_time')),
            ];

            $rooms = Room::where('capacity', '>=', $request->input('capacity'))
                ->whereDoesntHave('events', function ($query) use ($times) {
                    $query->whereBetween('start_time', $times)
                        ->orWhereBetween('end_time', $times)
                        ->orWhere(function ($query) use ($times) {
                            $query->where('start_time', '<', $times[0])
                                ->where('end_time', '>', $times[1]);
                        });
                })
                ->get();
        }

        return view('admin.bookings.search', compact('rooms'));
    }
//--------------------------------------------------------------




    public function create(){

        //$roles = Role::all();

        return view('BackEnd.bookings.create')->with([
//            'user' => $user,
//            'roles' => $roles
        ]);
    }





}
