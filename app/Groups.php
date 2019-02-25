<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    public function permissions()
    {
        return $this->hasMany('App\Permissions');
    }
}
