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
        Schema::create('company_full_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_id');
            $table->string('service_name');
            $table->string('company_id');
            $table->string('service_recorded_by');
            $table->string('service_recorded_date');

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
        Schema::dropIfExists('company_full_services');
    }
};
