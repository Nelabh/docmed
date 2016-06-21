<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'patient_name','mobile','gender','age','bloodgroup',
         'occupation','address','city','pincode','state',
         'country','verified','upload_photograph'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'patients';
}
