<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
           $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->nullable(false);
            $table->foreignId('category_id')->constrained()->cascadeOnDelete()->nullable(false);
            $table->string('title');
            $table->text('content')->nullable();
            $table->integer('view_count');
            $table->integer('like_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
