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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->longText('description');
            $table->integer('views');
            $table->longText('meta-words')->default(0);
            $table->longText('meta-description')->nullable();
            $table->longText('status')->default('pending');

            $table->timestamps();
        });


        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category-id')->constrained()->cascadeOnDelete(); //cascadeOnDelete() yo rakda category_post ko delete hunxa 
            $table->foreignId('post-id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
        Schema::dropIfExists('posts');
    }
};
