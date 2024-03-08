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
        Schema::create('installment_surcharge', function (Blueprint $table) {
            $table->bigInteger('id')->default(0);
            $table->integer('surcharge_type')->default(0);
            $table->integer('days')->default(0);
            $table->double('per_day')->default(0);
            $table->integer('trans_type');
            $table->integer('plot_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installment_surcharge');
    }
};
