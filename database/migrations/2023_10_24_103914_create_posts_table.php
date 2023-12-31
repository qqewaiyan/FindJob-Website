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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string("job_title");
            $table->string("job_description");
            $table->string("job_requirement");
            $table->string("job_detail");
            $table->string("job_location");
            $table->integer("job_status")->default(0);
            $table->string("valid_canditate")->nullable();
            $table->string("job_offer")->nullable();
            $table->string("salary")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
