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
        Schema::create('property_floors', function (Blueprint $table) {
            $table->bigInteger('floor_id', true);
            $table->bigInteger('building_id');
            $table->string('floor_no', 50);
            $table->integer('sort_order');
            $table->string('title', 1000);
            $table->string('remarks', 2000);
            $table->string('image', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_floors');
    }
};
