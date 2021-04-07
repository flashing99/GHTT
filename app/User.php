<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'username', 'password', 'gender', 'email', 'state' ,'profil_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


    public function roles(){
        return $this->belongsToMany( Role::class);
    }

    /*
    public function hasAnyRoles($roles){
        
        //return dd($this->roles()->whereIn('name', $roles)->get());

        if( $this->roles()->whereIn('name', $roles)->get() ){
            return true;
        }

        return false;
    }
    */
    public function hasAnyRoles($roles){
        
        if($this->roles()->whereIn('name', $roles)->get()->count()>0)
        {
            return true;
        }

        return false;
    }

    public function hasRole($role){
        if( $this->roles()->where('name', $role)->first() ){
            return true;
        }

        return false;
    }

    
}
