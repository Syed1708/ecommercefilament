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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')
            // ->constrained('categories')
            // ->cascadeOnDelete();
            $table->foreignId('brand_id')
            ->constrained('brands')
            ->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->string('image');
            $table->unsignedBigInteger('qty');
            $table->decimal('price');


            $table->boolean('is_visible')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->longText('description')->nullable();
            $table->enum('type', ['deliverable', 'downloadable'])->default('deliverable');
            $table->date('published_at');


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
