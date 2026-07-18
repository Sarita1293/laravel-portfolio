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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');

            $table->string('mobile',15);
            $table->string('email')->unique();
            $table->text('address');
            $table->decimal('years_of_experience', 3, 1);
            $table->string('profile_image')->nullable();

            $table->string('resume_file')->nullable();

            $table->string('linkedin_url')->nullable();
            $table->string('github_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};
