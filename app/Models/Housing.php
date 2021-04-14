<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Housing extends Model
{
    use SoftDeletes;

    protected $dates    = ['deleted_at'];
    protected $table    = 'housings';
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
        'name', 'number', 'area', 'floor', 'online', 'vip', 'description', 'subcategory_housing_id', 
    ];

    public function subcategoryHousing(){
        return $this->belongsTo(SubcategoryHousing::class);
    }

    // public function views()
    // {
    //     return $this->belongsToMany(View::class);
    // }
    public function bookings()
    {
        return $this->hasMany(BookingDetail::class);
    }

    
    public function views()
    {
        return $this->belongsToMany(View::class, 'housing_view');
    }

}