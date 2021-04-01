<?php
   
   namespace App\Http\Controllers\BackEnd\Admin;

use App\User;
//use App\Models\Gauge;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Gate;
use Redirect, Response;

class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('backend.admin.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'nom'       => 'required | string | max:255',
            'prenom'    => 'required | string | max:255',
            'gender'    => 'required | integer | min:1 | max:3',
        ]);
        
        //dd($request->nom);

        $user->firstname    = $request->nom;
        $user->lastname     = $request->prenom;
        $user->gender       = $request->gender;
          
        /*
        if($request->password){
            
            $this->validate($request,[
                'password' => 'min:6|confirmed',
            ]);
                
            $user->password = bcrypt($request->password);
        }
        */
                
        if($request->hasFile('profileImg')){
            
        $this->validate($request,[
                'profileImg' =>  'mimes:png',
            ]);
            $profileName = $user->id.'_avatar'.time().'.'.request()->profile->getClientOriginalExtension();
            $request->profile->storeAs('avatars', $profileName);
            
            $user->profile = $profileName;
        }
        
        $user->save();

        //return view('admin.profile', array('user' => Auth::user()))->with('message', 'Votre profile à bien été modifié.');
        //return redirect('admin/profile')->with('message', 'Votre profile à bien été modifié.');

        return redirect()->route('profile')->with('message', 'Votre profile à bien été modifié.');
    }


}