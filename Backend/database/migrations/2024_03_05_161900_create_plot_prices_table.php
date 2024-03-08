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
        Schema::create('plot_prices', function (Blueprint $table) {
            $table->integer('price_id', true);
            $table->integer('project_id');
            $table->integer('property_type_id')->default(0);
            $table->integer('size_id');
            $table->decimal('prev_price', 10, 0);
            $table->decimal('current_price', 10, 0);
            $table->integer('for_member');
            $table->integer('is_sold_out')->nullable()->default(0);
            $table->integer('for_dealer');
            $table->integer('no_of_months');
            $table->double('price_100_percent');
            $table->boolean('is_new')->nullable()->default(true);
            $table->tinyInteger('down_payment_per')->default(10);
            $table->decimal('discount_50_per', 5)->nullable()->default(6);
            $table->decimal('discount_100_per', 5)->nullable()->default(12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plot_prices');
    }
};
