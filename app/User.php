<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function group()
    {
        return $this->hasOne('App\Groups', 'id', 'groups_id');
    }

    public function permissions()
    {
        return $this->hasOne('App\Permissions', 'groups_id', 'groups_id');
    }

    public function hasAnyPermission($permissions)
    {
        if (is_array($permissions)) {
            foreach ($permissions as $permission) {

                if ($this->hasPermission($permission)) {
                    return true;
                }
            }
        } else {
            if ($this->hasPermission($permissions)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermission($permission)
    {
        if ($this->permissions()->where('permission', $permission)->first()||$this->permissions()->where('permission', '*')->first()) {
            return true;
        }
        return false;
    }

}
