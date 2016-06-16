<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'speciality_name','speciality_abbr'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'speciality';
}
