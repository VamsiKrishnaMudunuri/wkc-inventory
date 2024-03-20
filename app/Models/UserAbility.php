<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAbility extends Model
{
    protected $table = 'user_abilities';
    public $incrementing = false;
    protected $hidden = [];
    protected $guarded = [];

    public function roleAbilities()
    {
        return $this->hasMany('App\Models\UserRoleAbility', 'ability_id', 'id');
    }
}
