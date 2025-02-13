<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('translation_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // e.g., 'messages', 'home', etc.
            $table->timestamps();
        });

        Schema::create('translation_keys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained('translation_groups')->onDelete('cascade');
            $table->string('key');
            $table->timestamps();
            $table->unique(['group_id', 'key']);
        });

        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')->constrained('languages')->onDelete('cascade');
            $table->foreignId('translation_key_id')->constrained('translation_keys')->onDelete('cascade');
            $table->text('value');
            $table->timestamps();
            $table->unique(['language_id', 'translation_key_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('translations');
        Schema::dropIfExists('translation_keys');
        Schema::dropIfExists('translation_groups');
    }
};
