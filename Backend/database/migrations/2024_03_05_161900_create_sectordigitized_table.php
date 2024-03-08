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
        Schema::create('sectordigitized', function (Blueprint $table) {
            $table->integer('OGR_FID', true)->unique('OGR_FID');
            $table->geometry('SHAPE');
            $table->decimal('sector_id', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectordigitized');
    }
};
