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
        Schema::create('mapping_detail', function (Blueprint $table) {
            $table->integer('mplot_id');
            $table->integer('bproperty_id')->default(0);
            $table->integer('mproperty_id')->default(0);
            $table->integer('bplot_id')->default(0);
            $table->integer('ballocation_id')->default(0);
            $table->integer('mallocation_id')->default(0);
            $table->integer('bresult_id')->default(0);
            $table->integer('mresult_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapping_detail');
    }
};
