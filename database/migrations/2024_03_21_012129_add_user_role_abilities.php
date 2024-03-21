<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('user_roles')->insert([
            [
                'id' => 'SUPER_ADMIN',
                'name' => 'Super Admin',
                'is_show' => false,
            ],
            [
                'id' => 'ADMIN',
                'name' => 'Administrator',
                'is_show' => true,
            ],
        ]);

        DB::table('user_abilities')->insert([
            [
                'id' => 'VIEW_USERS',
                'name' => 'View Users',
            ],
            [
                'id' => 'UPDATE_USER',
                'name' => 'Update User',
            ],
            [
                'id' => 'UPDATE_USER_ADMIN',
                'name' => 'Update User Admin',
            ],
            [
                'id' => 'APPROVE_USER',
                'name' => 'Approve User',
            ],
        ]);

        DB::table('user_role_abilities')->insert([
            [
                'role_id' => 'SUPER_ADMIN',
                'ability_id' => 'VIEW_USERS',
                'is_enable' => true,
            ],
            [
                'role_id' => 'SUPER_ADMIN',
                'ability_id' => 'UPDATE_USER_ADMIN',
                'is_enable' => true,
            ],
            [
                'role_id' => 'SUPER_ADMIN',
                'ability_id' => 'UPDATE_USER',
                'is_enable' => true,
            ],
            [
                'role_id' => 'SUPER_ADMIN',
                'ability_id' => 'APPROVE_USER',
                'is_enable' => true,
            ],
            [
                'role_id' => 'ADMIN',
                'ability_id' => 'VIEW_USERS',
                'is_enable' => true,
            ],
            [
                'role_id' => 'ADMIN',
                'ability_id' => 'UPDATE_USER',
                'is_enable' => true,
            ],
            [
                'role_id' => 'ADMIN',
                'ability_id' => 'APPROVE_USER',
                'is_enable' => true,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
