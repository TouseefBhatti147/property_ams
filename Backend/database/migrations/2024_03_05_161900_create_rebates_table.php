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
        Schema::create('rebates', function (Blueprint $table) {
            $table->bigInteger('installment_id')->primary();
            $table->integer('plot_id')->default(0);
            $table->string('ms_no', 50);
            $table->text('installment_title')->nullable();
            $table->bigInteger('due_amount')->default(0);
            $table->bigInteger('paid_amount')->default(0);
            $table->date('due_date')->nullable();
            $table->date('entry_date')->nullable();
            $table->date('instrument_date')->nullable();
            $table->text('remarks')->nullable();
            $table->integer('voucher_id')->default(0);
            $table->text('receipt_no')->nullable();
            $table->integer('voucher_plot_detail_id')->default(0);
            $table->integer('amount_type')->default(0);
            $table->integer('receipt_no_num')->default(0);
            $table->integer('rebate_type');
            $table->bigInteger('instrument_amount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rebates');
    }
};
