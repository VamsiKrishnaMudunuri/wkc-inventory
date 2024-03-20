<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_roles';
    public $incrementing = false;
    protected $hidden = [];
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'role_id', 'id');
    }

    public function roleAbilities()
    {
        return $this->hasMany('App\Models\UserRoleAbility', 'role_id', 'id');
    }
}
