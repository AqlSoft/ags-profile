<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('a_name'); // Arabic name
            $table->string('e_name'); // English name
            $table->text('a_description')->nullable(); // Arabic description
            $table->text('e_description')->nullable(); // English description
            $table->string('image')->nullable(); // Product image
            $table->string('thumbnail')->nullable(); // Product thumbnail
            $table->decimal('price', 10, 2)->nullable(); // Product price
            $table->string('category')->nullable(); // Product category
            $table->integer('sort_order')->default(0); // For custom sorting
            $table->boolean('featured')->default(false); // Featured product
            $table->boolean('active')->default(true); // Product status
            $table->string('slug')->unique(); // URL friendly name
            $table->json('specifications')->nullable(); // Product specifications
            $table->json('meta_data')->nullable(); // SEO meta data
            $table->timestamps();
            $table->softDeletes(); // Add soft delete
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
