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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_id' );
            $table->string('quiz_name');
            $table->string('quiz_date_from');
            $table->string('quiz_time_from');
            $table->string('quiz_date_to');
            $table->string('quiz_time_to');
            $table->string('company_id');
            $table->string('quiz_registered_date');
            $table->string('quiz_registered_by');
            $table->string('quiz_total_marks');
            $table->string('attempt_user_limit');
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
        Schema::dropIfExists('quiz');
    }
};
