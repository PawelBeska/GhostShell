<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stages extends Model
{
    protected $fillable = [
   'name','orders_id','progress','started_at','ended_at'
    ];
}
