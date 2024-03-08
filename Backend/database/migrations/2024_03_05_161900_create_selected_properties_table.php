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
        Schema::create('selected_properties', function (Blueprint $table) {
            $table->integer('record_id', true);
            $table->integer('property_id');
            $table->integer('application_id');
            $table->integer('plot_id');
            $table->integer('reg_date');
            $table->integer('property_type')->comment('primary/duplex/optional');
            $table->integer('status')->comment('active/inactive');
            $table->integer('status_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selected_properties');
    }
};
