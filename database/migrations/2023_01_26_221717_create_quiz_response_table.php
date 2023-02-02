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
        Schema::create('quiz_responses', function (Blueprint $table) {
            $table->id();
            $table->string('response_id');
            $table->string('quiz_id');
            $table->string('question_id');
            $table->string('question_option_id');
            $table->string('answered_question_status');
            $table->string('earned_marks');
            $table->string('user_id');
            $table->string('user_location');
            $table->string('user_phone');
            $table->string('user_country');
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
        Schema::dropIfExists('quiz_response');
    }
};
