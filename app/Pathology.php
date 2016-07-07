<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pathology extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'name','mobile','gender','age','shop_name',
         'qualification','mic','address','city','pincode','state',
         'country','verified','upload_photograph'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'pathology';
}
