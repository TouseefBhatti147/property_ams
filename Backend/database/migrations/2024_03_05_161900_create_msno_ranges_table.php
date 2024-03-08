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
        Schema::create('msno_ranges', function (Blueprint $table) {
            $table->integer('id', true)->unique('id_UNIQUE');
            $table->integer('project_id')->nullable();
            $table->integer('property_type_id')->nullable();
            $table->bigInteger('start')->nullable();
            $table->bigInteger('end')->nullable();
            $table->longText('unused')->nullable();
            $table->bigInteger('old_start')->nullable();
            $table->bigInteger('old_end')->nullable();
            $table->string('out_of_range', 2000)->nullable();
            $table->bigInteger('max_num')->nullable()->default(0);

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msno_ranges');
    }
};
