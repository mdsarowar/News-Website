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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('news_title')->nullable();
            $table->string('writer_name')->nullable();
            $table->string('reporter_image')->nullable();
            $table->string('news_image')->nullable();
            $table->text('image_title')->nullable();
            $table->longText('content')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('hit_count')->default(0);
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
        Schema::dropIfExists('news');
    }
};
