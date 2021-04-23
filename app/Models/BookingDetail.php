<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $table    = 'booking_details';
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
        'booking_id', 'adult', 'children', 'housing_id', 'housing_name', 'number', 'amount', 'vat', 'date_start', 'date_end', 'state', 
    ];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }

    public function housing(){
        return $this->belongsTo(Housing::class);
    }

}