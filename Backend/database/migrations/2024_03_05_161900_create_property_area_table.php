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
        Schema::create('property_area', function (Blueprint $table) {
            $table->integer('area_id', true);
            $table->integer('property_id')->default(0);
            $table->integer('area_type')->default(0);
            $table->decimal('area', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_area');
    }
};
