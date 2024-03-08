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
        Schema::create('property_eform_booking_packages', function (Blueprint $table) {
            $table->integer('package_id', true);
            $table->bigInteger('payment_percent');
            $table->string('title', 500);
            $table->double('discount_percent');
            $table->integer('status');
            $table->integer('has_allocation');
            $table->integer('is_default');
            $table->double('discount_percent_villa');
            $table->double('discount_percent_property');
            $table->double('discount_percenter_s_homes')->nullable();
            $table->double('discount_percent_3_5_plot')->nullable();
            $table->double('disc_per_villa_apartment')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_eform_booking_packages');
    }
};
