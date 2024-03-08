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
        Schema::create('tax_rate_details', function (Blueprint $table) {
            $table->integer('detail_id', true);
            $table->integer('rate_id')->default(0);
            $table->integer('size_id')->default(0);
            $table->bigInteger('rate_per_marla')->default(0);
            $table->bigInteger('plot_value')->default(0);
            $table->bigInteger('filer_rate')->default(0);
            $table->bigInteger('non_filer_rate')->default(0);
            $table->bigInteger('non_resident_rate')->default(0);
            $table->integer('status')->default(0);
            $table->text('remarks')->nullable();
            $table->integer('calculation_mode')->default(0)->comment('fixed amount, through unit rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_rate_details');
    }
};
