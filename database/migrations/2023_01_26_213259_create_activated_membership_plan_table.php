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
        Schema::create('activated_membership_plans', function (Blueprint $table) {
            $table->id();
            $table->string('activated_membership_id');
            $table->string('company_id');
            $table->string( 'membership_id');
            $table->string('membership_start_from');
            $table->string('membership_end_to');
            $table->string('amount_paid');
            $table->string('payment_method_used');
            $table->string('registered_date');
            $table->string('registered_by');
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
        Schema::dropIfExists('activated_membership_plan');
    }
};
