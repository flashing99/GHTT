<?php
//---------------------------------------------------------------------//
// FOR WEB ADMINS                                                      //
//---------------------------------------------------------------------//
namespace App\Http\Controllers\BackEnd\Admin;

use App\User;
//use App\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Gate;
use Auth;
use DataTables;
use Redirect,Response;

class UserController extends Controller
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
            //$data = User::all();
            $data = User::where('email',"!=", Auth::user()->email)->get();

            //$data = User::select('*');
            /*
            $data = User::whereHas(
                'roles', function($q){
                    $q->where('name', 'support');
                }
            )->get();
            */
            

            //return $data->roles()->get()->pluck('name');


            return Datatables::of($data)
            ->editColumn('created_at', function ($data) 
            {
                return date('d-m-Y à H:i', strtotime($data->created_at) );
            })
            ->editColumn('etat', 'backend.admin.users.status')
            // //    ->addColumn('roles', function ($user) { return $user->roles->count() ? implode(', ', $user->roles->pluck('name')->toArray()) :  '- Aucun -'; })
            ->addColumn('action', 'backend.admin.users.action_button')
            ->rawColumns(['action', 'etat'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('backend.admin.users.index');
    }

    //Show form
    public function create(){

        $roles = Role::all();

        return view('Backend.admin.users.create')->with([
//            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     */
/*
    public function store(Request $request){
        
        //dd($request->roles);
        
        //Validation
        $data = $request->validate([
            'nom'       => 'required | string | max:255',
            'prenom'    => 'required | string | max:255',
            'gender'    => 'required | integer | min:1 | max:3',
            'email'     => 'required | string | email | max:255 | unique:users',
            'password'  => 'required | string | min:1 | confirmed',
        ]);
        
        // dd($request->all());

       
        //Add user
        $user = new User;
        $user->firstname    = $request->prenom;
        $user->lastname     = $request->nom;
        $user->gender       = $request->gender;
        $user->email        = $request->email;
        //$user->username     = $request->username;
        $user->password     = Hash::make($request->password);
        $user->save();

        $role = Role::select('id')->where('name', 'support')->first();
        $user->roles()->attach($role);

        return redirect('/admin/users');
        //return redirect()->back();
        
    }
*/

public function store(Request $request){
        
    //dd($request->roles);
/*
    //Validation
    $data = $request->validate([
        'nom'       => 'required | string | max:255',
        'prenom'    => 'required | string | max:255',
        'gender'    => 'required | integer | min:1 | max:3',
        'email'     => 'required | string | email | max:255 | unique:users',
        'password'  => 'required | string | min:1 | confirmed',
    ]);
*/

    $this->validate($request, [
        'nom'       => 'required | string | max:255',
        'prenom'    => 'required | string | max:255',
        'gender'    => 'required | integer | min:1 | max:3',
        'email'     => 'required | string | email | max:255 | unique:users',
        'password'  => 'required | string | min:1 | confirmed',
    ]);

    // dd($request->all());
    //dd($request->roles);
   
    //Add user
    $user = new User;
    $user->firstname    = $request->prenom;
    $user->lastname     = $request->nom;
    $user->gender       = $request->gender;
    $user->email        = $request->email;
    $user->state        = $request->etat;
    $user->password     = Hash::make($request->password);
    $user->save();

    $user->roles()->attach($request->roles);

    return redirect('/backoffice/users');
    //return redirect()->back();
    
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect( route('backend.admin.users.index') );
        }
        $roles = Role::all();
        
        return view('backend.admin.users.edit')->with([
            'user'  => $user,
            'roles' => $roles
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'nom'       => 'required|string|max:255',
            'prenom'    => 'required|string|max:255',
            'gender'    => 'required|integer|min:1|max:3',
            'email'     => 'required|email|unique:users,email,'.$user->id.'',
            'password'  => 'nullable|string|min:1|confirmed',
        ]);

        $user->roles()->sync($request->roles);

        $user->firstname        = $request->prenom;
        $user->lastname         = $request->nom;
        $user->gender           = $request->gender;
        $user->email            = $request->email;
        $user->password         = Hash::make($request->password);
        $user->state            = $request->etat;
        //$user->role             = $request->role;

        $user->save();

        return redirect()->route('backend.admin.users.index');
    }

    /**
     * Remove the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
/*
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect( route('home') );
        }

        // update status user to 2
        $user->state  = '2';
        $user->save();

        return Response::json($user);
        //return redirect()->route('admin.users.index');
    }
*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function statusUser(Request $request, User $user)
    {
        $this->validate($request, [
            'etat'  => 'required | integer',
        ]);

        if(Gate::denies('edit-users')){
            return redirect( route('admin.users.index') );
        }
        
        $user->state    = $request->etat;

        $user->save();

        return Response::json($user->state);
    }


    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect( route('admin.users.index') );
        }

        //$data = Item::find(1)->delete();
        $user->delete();
        

        return Response::json($user);
        //return redirect()->route('admin.users.index');
    }
    



}
