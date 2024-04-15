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
        Schema::create('balloting_detail', function (Blueprint $table) {
            $table->integer('detail_id', true);
            $table->integer('balloting_id')->default(0);
            $table->integer('size_id')->default(0);
            $table->integer('files_available')->default(0);
            $table->integer('plots_available')->default(0);
            $table->integer('plots_balloted')->default(0);
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
        Schema::dropIfExists('balloting_detail');
    }
};
