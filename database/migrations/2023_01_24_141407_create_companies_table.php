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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_full_name');
            $table->string('company_short_name');
            $table->string('company_tin');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_representative_name');
            $table->string('company_representative_id');
            $table->string('company_type');
            $table->string('company_registration_document');
            $table->string('company_website');
            $table->string('company_biography');
            $table->string('company_logo');
            $table->string('company_welcome_image');
            $table->string('company_reference');
            $table->string('company_registered_date')->timestamps();
            $table->string('company_status');
            $table->string('company_login_password');
            $table->string('is_login');
            $table->string('membership_status');
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
        Schema::dropIfExists('companies');
    }
};
