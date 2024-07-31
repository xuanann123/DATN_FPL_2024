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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('course_name');
            $table->string('course_image');
            $table->text('course_desc')->nullable();
            $table->string('course_slug')->unique();
            $table->string('course_duration')->nullable();
            $table->string('sort_description')->nullable();
            $table->unsignedBigInteger('course_price');
            $table->unsignedBigInteger('course_price_sale')->nullable();
            $table->string('course_free')->nullable();
            $table->unsignedBigInteger('total_student')->nullable()->default(0);
            $table->boolean('is_active')->default(1);
            $table->boolean('is_booking_teacher')->default(1);
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
