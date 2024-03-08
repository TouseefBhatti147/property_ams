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
        Schema::create('floors', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 355);
            $table->integer('building_id');
            $table->decimal('floor_rate', 10)->default(0);
            $table->integer('floor_type')->nullable()->default(0)->comment('[0 for Parking 1 For  Property]');
            $table->string('parking_fee')->nullable();
            $table->integer('floor_no')->default(0);
            $table->string('floor_code', 10)->nullable();
            $table->string('attachment', 100)->nullable();
            $table->integer('old_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('floors');
    }
};
