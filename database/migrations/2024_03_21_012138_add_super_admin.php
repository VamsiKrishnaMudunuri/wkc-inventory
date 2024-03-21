<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use App\Models\User;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // DB::table('users')->insert([
        //     [
        //         'id' => '1',
        //         'name' => 'Super Admin',
        //         'mobile' => '16475555678',
        //         'email' => 'admin@test.com',
        //         'password' => Hash::make('123456'),
        //         'register_status' => 'APPROVED',
        //         'register_status_updated_at' => Carbon::now(),
        //         'status' => 'ENABLE',
        //         'role_id' => 'SUPER_ADMIN',
        //         'remember_token' => false,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        // ]);

        $user = new User();
        $user->id = '1';
        $user->name = 'SUPER ADMIN';
        $user->mobile = '16475555678';
        $user->email = 'admin@test.com';
        $user->password = Hash::make('123456');
        $user->register_status = 'APPROVED';
        $user->register_status_updated_at = Carbon::now();
        $user->status = 'ENABLE';
        $user->role_id = 'SUPER_ADMIN';
        $user->remember_token = false;
        $user->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
