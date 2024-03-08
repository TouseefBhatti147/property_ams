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
        Schema::create('plots_digitized', function (Blueprint $table) {
            $table->integer('OGR_FID', true)->unique('OGR_FID');
            $table->geometry('SHAPE');
            $table->geometry('BufferedShape');
            $table->string('layer', 17)->nullable();
            $table->decimal('id', 6, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plots_digitized');
    }
};
