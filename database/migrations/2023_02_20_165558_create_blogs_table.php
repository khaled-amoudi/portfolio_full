<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->text('title');
            $table->text('body');
            $table->text('image')->nullable();
            $table->enum('lang', ['ar', 'en'])->default('en');
            $table->string('read_time')->nullable();
            $table->boolean('is_active')->default(1);
            $table->unsignedBigInteger('author_id');
            $table->json('author_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
