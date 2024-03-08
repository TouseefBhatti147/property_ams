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
        Schema::create('property_designs', function (Blueprint $table) {
            $table->integer('design_id', true);
            $table->string('title', 500);
            $table->integer('sort_order');
            $table->integer('status');
            $table->string('remarks', 2000);
            $table->integer('size_category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_designs');
    }
};
