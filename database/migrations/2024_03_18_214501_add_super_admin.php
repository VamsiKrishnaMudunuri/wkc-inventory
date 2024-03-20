<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

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
            ],
            [
                'id' => 'ADMIN',
                'name' => 'Administrator',
            ],
        ]);

        DB::table('user_abilities')->insert([
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
                'ability_id' => 'UPDATE_USER_ADMIN',
            ],
            [
                'role_id' => 'SUPER_ADMIN',
                'ability_id' => 'UPDATE_USER',
            ],
            [
                'role_id' => 'SUPER_ADMIN',
                'ability_id' => 'APPROVE_USER',
            ],
            [
                'role_id' => 'ADMIN',
                'ability_id' => 'UPDATE_USER',
            ],
            [
                'role_id' => 'ADMIN',
                'ability_id' => 'APPROVE_USER',
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Super Admin',
                'mobile' => '16475555678',
                'email' => 'admin@test.com',
                'password' => Hash::make('123456'),
                'register_status' => 'APPROVED',
                'register_status_updated_at' => Carbon::now(),
                'status' => 'ENABLE',
                'role_id' => 'SUPER_ADMIN',
                'remember_token' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
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
