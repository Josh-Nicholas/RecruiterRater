<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('team')->nullable();
            $table->string('firm')->nullable();
            $table->string('employer')->nullable();
            $table->string('successful')->nullable();
            $table->string('recruitment')->nullable();
            $table->string('regarding_data')->nullable();
            $table->integer('experience_stars')->default(0);
            $table->integer('recommend_emoj')->default(0);
            $table->string('review_title')->nullable();
            $table->text('review_content')->nullable();
            $table->integer('communication_stars')->default(0);
            $table->integer('feedback_stars')->default(0);
            $table->integer('efficiency_stars')->default(0);
            $table->integer('information_stars')->default(0);
            $table->integer('throughout_stars')->default(0);
            $table->integer('treated_stars')->default(0);
            $table->string('added_value')->nullable();
            $table->string('interview_preparation')->nullable();
            $table->string('better_support')->nullable();
            $table->text('review_rating')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
