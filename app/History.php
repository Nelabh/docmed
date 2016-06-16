<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'doctor_email', 'patient_email','order_id','datetime','symptoms','record_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'history';
}
