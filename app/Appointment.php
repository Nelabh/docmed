<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'patient_email', 'doctor_email','datetime','payment_status','order_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'appointment';
}
