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
        Schema::create('surcharge_breakdown', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('installment_id')->default(0);
            $table->bigInteger('surcharge_id')->default(0);
            $table->integer('voucher_plot_detail_id')->default(0);
            $table->bigInteger('total_surcharge')->default(0);
            $table->bigInteger('inst_surcharge')->default(0);
            $table->integer('surcharge_type')->default(0);
            $table->string('installment_title', 250)->nullable();
            $table->date('installment_date')->nullable();
            $table->double('installment_amount')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surcharge_breakdown');
    }
};
