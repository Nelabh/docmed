<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
          /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'order_id', 'symptoms'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'symptoms';
}
