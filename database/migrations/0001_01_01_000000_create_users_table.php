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
        Schema::create('user_roles', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('name', 255);
            $table->boolean('is_show')->default(true)->index();
        });

        Schema::create('user_abilities', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('name', 255);
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('ext_id')->unique();
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('register_status', 100)->index();
            $table->datetime('register_status_updated_at')->index();
            $table->string('status', 100)->index();
            $table->string('role_id', 100);
            //$table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('user_roles');
        });

        Schema::create('user_role_abilities', function (Blueprint $table) {
            $table->id();
            $table->string('role_id', 100);
            $table->string('ability_id', 100);
            $table->boolean('is_enable')->default(true)->index();
            $table->foreign('role_id')->references('id')->on('user_roles');
            $table
                ->foreign('ability_id')
                ->references('id')
                ->on('user_abilities');
        });

        // Schema::create('password_reset_tokens', function (Blueprint $table) {
        //     $table->string('email')->primary();
        //     $table->string('token');
        //     $table->timestamp('created_at')->nullable();
        // });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        //Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('user_role_abilities');
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('user_abilities');
    }
};
