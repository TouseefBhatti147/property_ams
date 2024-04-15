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
        Schema::create('balloting_sectors', function (Blueprint $table) {
            $table->integer('detail_id', true);
            $table->integer('balloting_id')->default(0);
            $table->integer('sector_id')->default(0);
            $table->integer('no_of_files')->default(0);
            $table->integer('no_of_plots')->default(0);
            $table->string('attachment', 100)->nullable();
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
        Schema::dropIfExists('balloting_sectors');
    }
};
