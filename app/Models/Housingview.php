<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Housingview extends Model
{
    // use SoftDeletes;

    // protected $dates    = ['deleted_at'];
    protected $table    = 'housing_view';
    //protected $primaryKey   = 'id';
    public $incrementing    = false;
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
        'housing_id', 'view_id', 'state', 
    ];

    // public function CategoryGallerie(){
    //     return $this->belongsTo(CategoryGallerie::class);
    // }



}