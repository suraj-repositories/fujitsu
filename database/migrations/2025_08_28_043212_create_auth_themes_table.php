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
        Schema::create('auth_themes', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['login', 'register', 'forgot-password'])->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('view')->nullable(false);
            $table->string('image_path')->nullable();
            $table->enum('direction' , ['ltr', 'rtl'])->nullable();
            $table->boolean('is_applied')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_themes');
    }
};
