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
        Schema::create('user_job_hunt_statuses', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->boolean("employment_status");
            $table->string("exp_level");
            $table->string("job_category");
            $table->string("expected_salary");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_job_hunt_statuses');
    }
};
