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
        Schema::create('fbr_atl_attributes', function (Blueprint $table) {
            $table->integer('plot_id')->default(0)->primary();
            $table->bigInteger('price')->default(0);
            $table->bigInteger('additional_amount')->default(0);
            $table->integer('meta_id')->default(0);
            $table->bigInteger('discount')->default(0);
            $table->bigInteger('first_inst')->default(0);
            $table->bigInteger('session_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('ledger_difference')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fbr_atl_attributes');
    }
};
