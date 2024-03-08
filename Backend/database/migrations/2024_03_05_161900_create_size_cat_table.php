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
        Schema::create('size_cat', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('size');
            $table->string('code', 256);
            $table->integer('category_id')->index('idx_categoryid');
            $table->integer('is_form_house');
            $table->integer('size_in_yards');
            $table->string('dimension')->nullable();
            $table->integer('ordering')->default(1);
            $table->string('specs', 200);
            $table->integer('allow_in_sales');
            $table->integer('size_in_sft')->default(0);
            $table->decimal('marla', 11)->nullable();
            $table->integer('dev_charges')->nullable()->default(0);
            $table->tinyInteger('allow_in_csc')->default(0);
            $table->tinyInteger('allow_in_lsc')->default(0);
            $table->decimal('size_in_marla', 10)->default(0);
            $table->integer('old_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_cat');
    }
};
