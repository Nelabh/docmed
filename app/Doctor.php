<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'doc_name','mobile','gender','age','speciality',
         'qualification','hospital_affiliation','year_of_exp','mci','curent_position','address',
         'city','pincode','state','country','verified','upload_photograph'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'doctors';
}
