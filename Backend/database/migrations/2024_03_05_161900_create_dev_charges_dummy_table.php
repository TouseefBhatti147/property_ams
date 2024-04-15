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
        Schema::create('dev_charges_dummy', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('project_id')->nullable();
            $table->integer('plot_id')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('amount')->nullable();
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
        Schema::dropIfExists('dev_charges_dummy');
    }
};
