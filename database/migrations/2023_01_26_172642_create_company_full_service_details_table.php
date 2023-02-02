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
        Schema::create('company_full_service_details', function (Blueprint $table) {
            $table->id();
            $table->string('full_service_details_id');
            $table->string('service_id');
            $table->string('full_content');
            $table->string('main_image');
            $table->string('is_there_another_image');

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
        Schema::dropIfExists('company_full_service_details');
    }
};
