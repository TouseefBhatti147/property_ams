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
        Schema::create('property_eform_booking_package_plans', function (Blueprint $table) {
            $table->integer('package_plan_id', true);
            $table->integer('package_id');
            $table->integer('plot_size');
            $table->integer('installment_plan')->nullable();
            $table->integer('no_of_months');
            $table->integer('installment_plan_monthly')->nullable()->default(0);
            $table->integer('installment_plan_half_yearly')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_eform_booking_package_plans');
    }
};
