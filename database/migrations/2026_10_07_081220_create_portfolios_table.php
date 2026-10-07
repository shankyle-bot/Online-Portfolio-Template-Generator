<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();

            // Personal Information
            $table->string('full_name');
            $table->string('profile_picture')->nullable();
            $table->string('email');
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();

            // About
            $table->text('about_me')->nullable();

            // Education
            $table->text('education')->nullable();

            // Skills
            $table->text('skills')->nullable();

            // Projects
            $table->text('projects')->nullable();

            // Experience
            $table->text('work_experience')->nullable();

            // Social Links
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();

            // Selected template
            $table->string('template')->default('simple');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};