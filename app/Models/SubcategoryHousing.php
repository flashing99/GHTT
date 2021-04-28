<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubcategoryHousing extends Model
{
    use SoftDeletes;

    protected $dates    = ['deleted_at'];
    protected $table    = 'subcategory_housings';
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
        'name', 'category_housing_id', 'description', 'image', 'price', 'state', 
    ];

    public function CategoryHousing(){
        return $this->belongsTo(CategoryHousing::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }



}