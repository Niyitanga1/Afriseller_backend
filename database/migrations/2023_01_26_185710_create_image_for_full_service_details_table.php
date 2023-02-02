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
        Schema::create('image_for_full_service_details', function (Blueprint $table) {
            $table->id();
            $table->string('image_details_id');
            $table->string('full_service_details_id');
            $table->string('image_location');
            $table->string('image_uploaded_date');
            $table->string('image_uploaded_by');
            $table->string('image_status');
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
        Schema::dropIfExists('image_for_full_service_details');
    }
};
