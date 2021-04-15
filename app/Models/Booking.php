<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $table    = 'bookings';
    //protected $primaryKey   = 'id';
    //public $incrementing    = false;
    //protected $keyType      = 'string';
    //public $timestamps      = false;
    //protected $dateFormat   = 'U';
    //const CREATED_AT        = 'creation_date';
    //const UPDATED_AT        = 'last_update';
    //protected $connection   = 'connection-name';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'mobile', 'state', 
    ];

    public function BookingDetail(){
        return $this->hasOne(BookingDetail::class);
    }




}