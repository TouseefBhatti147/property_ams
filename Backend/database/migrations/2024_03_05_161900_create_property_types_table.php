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
        Schema::create('property_types', function (Blueprint $table) {
            $table->increments('property_type_id');
            $table->string('title')->nullable();
            $table->string('short', 45)->nullable();
            $table->string('short_sm', 45)->nullable();
            $table->boolean('allow_in_csc')->default(false);
            $table->boolean('allow_in_lsc')->default(false);
            $table->integer('old_id')->nullable();

            $table->unique(['property_type_id'], 'property_type_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_types');
    }
};
