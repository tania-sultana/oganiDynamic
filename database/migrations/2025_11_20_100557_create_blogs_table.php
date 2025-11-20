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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('first_title');
            $table->string('second_title');
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('first_thumbnail_id')->nullable()->constrained('media')->nullOnDelete();
            $table->foreignId('second_thumbnail_id')->nullable()->constrained('media')->nullOnDelete();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('comment')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
