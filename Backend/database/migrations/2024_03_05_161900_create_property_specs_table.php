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
        Schema::create('property_specs', function (Blueprint $table) {
            $table->bigInteger('spec_id', true);
            $table->bigInteger('property_id');
            $table->integer('spec_category_id');
            $table->string('specs', 1000);
            $table->integer('status');
            $table->string('spec_unit', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_specs');
    }
};
