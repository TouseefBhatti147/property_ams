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
        Schema::create('surchargeable_instruments', function (Blueprint $table) {
            $table->bigInteger('voucher_plot_detail_id')->primary();
            $table->bigInteger('ledger_inst_surch_amount')->default(0);
            $table->bigInteger('inst_surcharge_applied')->default(0);
            $table->bigInteger('ledger_dev_surch_amount')->default(0);
            $table->bigInteger('dev_surcharge_applied')->default(0);
            $table->bigInteger('inst_surcharge_paid')->default(0);
            $table->integer('inst_surcharge_paid_through')->default(0)->comment('0: same receipt, 1: different receipt');
            $table->bigInteger('dev_surcharge_paid')->default(0);
            $table->integer('dev_surcharge_paid_through')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surchargeable_instruments');
    }
};
