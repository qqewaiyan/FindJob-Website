<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("phone",15);
            $table->string("address");
            $table->string("role");
            $table->string("gender")->nullable();

            $table->integer("employee_number")->nullable();
            $table->string("type")->nullable();
            $table->string("description")->nullable();
            $table->string("image")->nullable();
            $table->string("cv_file")->nullable();
            $table->integer("status")->default(0);
            $table->string("previous_job")->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
