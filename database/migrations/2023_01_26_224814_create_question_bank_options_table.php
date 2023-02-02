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
        Schema::create('question_bank_options', function (Blueprint $table) {
            $table->id();
           
            $table->string('question_option_id' );
            $table->string('question_id' );
            $table->string('option_name' );
            $table->string( 'option_status' );
            $table->string('option_registered_date' );
            $table->string('option_registered_by' );
            $table->string( 'option_marks' );
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
        Schema::dropIfExists('question_bank_options');
    }
};
