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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description');
            $table->text('long_description')->nullable();
            $table->text('food_history')->nullable();
            $table->text('interesting_facts')->nullable();
            $table->string('main_image_url');
            $table->integer('likes_count')->default(0);
            $table->integer('view_count')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();

            // Indexes for search performance
            $table->index(['name', 'region_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
