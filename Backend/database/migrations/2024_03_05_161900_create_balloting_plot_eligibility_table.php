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
        Schema::create('balloting_plot_eligibility', function (Blueprint $table) {
            $table->bigInteger('eligibility_id', true);
            $table->integer('plot_id');
            $table->integer('balloting_id');
            $table->integer('type');
            $table->integer('remarks');
            $table->timestamps(); // Add timestamps

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_plot_eligibility');
    }
};
