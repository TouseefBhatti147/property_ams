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
        Schema::create('property_building_units', function (Blueprint $table) {
            $table->integer('building_unit_id', true);
            $table->integer('property_id');
            $table->integer('unit_type')->comment('shop/appartment');
            $table->string('unit_no', 1000);
            $table->integer('allow_in_trading');
            $table->integer('parent_id');
            $table->integer('status');
            $table->integer('floor_id');
            $table->string('description', 1000);
            $table->integer('reservation_status')->default(0);
            $table->string('reservation_remarks', 2000)->nullable();
            $table->integer('unit_size');
            $table->string('total_area', 50);
            $table->string('area_wo_balcony', 50);
            $table->double('price');
            $table->string('model', 100)->nullable();
            $table->string('model_3d', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_building_units');
    }
};
