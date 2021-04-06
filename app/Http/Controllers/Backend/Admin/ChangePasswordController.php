<?php
   
namespace App\Http\Controllers\BackEnd\Admin;
   
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
  
class ChangePasswordController extends Controller
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
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Backend.admin.changePassword');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password'      => ['required', new MatchOldPassword],
            'new_password'          => ['required'],
            'new_confirm_password'  => ['same:new_password'],
        ], 
    
    [
        'current_password.required'     => 'Le mot de passe actuel est obligatoire.',
        'new_password.required'         => 'Le nouveau mot de passe est obligatoire.',
        'new_confirm_password.required' => 'La confirmation du mot de passe est obligatoire.',
        'new_confirm_password.same'     => 'La confirmation du mot de passe ne correspond pas.',

    ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        //dd('Password change successfully.');
        //return redirect('admin/change-password')->with('message', 'Votre mot de passe à bien été modifié.');

        return redirect()->route('change.password')->with('message', 'Votre mot de passe à bien été modifié.');
    }
}