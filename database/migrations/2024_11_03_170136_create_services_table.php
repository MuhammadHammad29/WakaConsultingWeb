<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) 
        {
        $table->id();
        $table->string('title');
        $table->string('tagline')->nullable();
        $table->text('description')->nullable();
        $table->json('benefits')->nullable(); // Store benefits as JSON array
        $table->json('images')->nullable();    // Store image paths as JSON array
        $table->json('testimonials')->nullable(); // Store testimonials as JSON array
        $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
