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
        Schema::create('property_features', function (Blueprint $table) {
            $table->integer('feature_id', true);
            $table->string('title', 500);
            $table->integer('sort_order');
            $table->integer('status');
            $table->string('remarks', 2000);
            $table->integer('for_categ1');
            $table->integer('for_categ2');
            $table->integer('for_categ3');
            $table->integer('for_categ4');
            $table->integer('for_categ5');
            $table->integer('for_categ6');
            $table->integer('for_categ7');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_features');
    }
};
