<?php

use App\Models\Media;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('discount_price', 8, 2)->default(0);
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('additional_information')->nullable();
            $table->foreignIdFor(Media::class)->nullable()->constrained()->nullOnDelete();
            $table->decimal('weight', 8, 2)->default(0);
            $table->string('slots')->default(0);
            $table->json('features')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
