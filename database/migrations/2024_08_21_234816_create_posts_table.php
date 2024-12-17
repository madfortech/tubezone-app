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
            $table->string('slug')->unique()->nullable();
            $table->mediumText('description');
            $table->enum('visibility', ['public', 'private'])->default('public');
            $table->enum('audience', ['for_kids', 'not_for_kids']);
            $table->string('restrictions')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();

            $table->foreignId('user_id')->constrained()->references('id')->on('users');
            $table->foreignId('category_id')->nullable()->constrained()->references('id')->on('categories');
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
