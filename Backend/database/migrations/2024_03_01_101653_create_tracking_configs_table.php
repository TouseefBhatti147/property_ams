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
        Schema::create('tracking_configs', function (Blueprint $table) {
            $table->increments('tracking_config_id');
            $table->integer('tracking_type');
            $table->integer('project_id');
            $table->integer('property_type_id');
            $table->integer('sales_center_id')->nullable();
            $table->string('description', 200)->nullable();
            $table->integer('no_of_steps')->default(2);
            $table->tinyInteger('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking_configs');
    }
};
