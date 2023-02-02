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
        Schema::create('membership_plans', function (Blueprint $table) {
            $table->id();
            $table->string('membership_id');
            $table->string('membership_name');
            $table->string('membership_duration');
            $table->string('membership_recorded_date');
            $table->string('membership_recorded_by');
            $table->string('membership_fees');
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
        Schema::dropIfExists('membership_plan');
    }
};
