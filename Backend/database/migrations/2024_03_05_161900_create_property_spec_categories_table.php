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
        Schema::create('property_spec_categories', function (Blueprint $table) {
            $table->integer('spec_category_id', true);
            $table->integer('type_id')->comment('plot category,property,property gfa');
            $table->string('title', 1000);
            $table->integer('sort_order');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_spec_categories');
    }
};
