<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'doctor_email', 'patient_email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'connection';
}
