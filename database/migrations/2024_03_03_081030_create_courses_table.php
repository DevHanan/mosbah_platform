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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->double('price');
            $table->integer('course_type_id');
            $table->date('published_at');
            $table->boolean('active')->default(1);
            $table->integer('track_id');
            $table->integer('instructor_id');
            $table->string('image')->nullable();
            $table->string('background_image')->nullable();
            $table->string('promo_url')->nullable();
            $table->string('level')->nullable();
            $table->text('description')->nullable();
            $table->text('goals')->nullable();
            $table->text('directedTo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
