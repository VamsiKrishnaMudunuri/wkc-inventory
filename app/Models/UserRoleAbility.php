<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoleAbility extends Model
{
    protected $table = 'user_role_abilities';
    public $incrementing = false;
    protected $hidden = [];
    protected $guarded = [];

    public function userRole()
    {
        return $this->belongsTo('App\Models\UserRole', 'role_id', 'id');
    }

    public function userAbility()
    {
        return $this->belongsTo('App\Models\UserAbility', 'ability_id', 'id');
    }
}
