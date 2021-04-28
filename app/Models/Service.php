<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table    = 'services';
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
        'name', 'subcategory_housing_id', 'state', 
    ];

    // public function BookingDetail(){
    //     return $this->hasOne(BookingDetail::class);
    // }

    public function subcategoryHousing()
    {
        return $this->belongsTo(SubcategoryHousing::class);
    }




}