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
    Schema::create('balloting_data_properties', function (Blueprint $table) {
        $table->increments('id')->unique('id_UNIQUE');
        $table->unsignedInteger('property_id')->default(0)->unique('property_id_UNIQUE');
        $table->string('choice_priority', 100)->nullable()->default('0');
        $table->string('choice_list', 100)->nullable()->default('0');
        $table->boolean('is_odd_size')->nullable()->default(false);
        $table->integer('property_type_id')->nullable()->default(0);
        $table->integer('size_id')->nullable()->default(0);
        $table->integer('size_ordering')->nullable();
        $table->integer('sector_id')->nullable()->default(0);
        $table->integer('block_id')->nullable();
        $table->integer('block_ordering')->nullable()->default(1);
        $table->boolean('reservation_status')->nullable()->default(true);
        $table->integer('plot_id')->nullable()->default(0);
        $table->string('plot_no', 100)->nullable();
        $table->integer('street_id')->nullable()->default(0);
        $table->integer('project_id')->nullable();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_data_properties');
    }
};
