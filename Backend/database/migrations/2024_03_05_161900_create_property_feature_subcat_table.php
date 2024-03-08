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
        Schema::create('property_feature_subcat', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cat_id')->nullable()->default(0);
            $table->integer('type')->comment('[1=text,2=date, 3=number]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_feature_subcat');
    }
};
