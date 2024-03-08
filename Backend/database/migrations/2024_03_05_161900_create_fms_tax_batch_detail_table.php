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
        Schema::create('fms_tax_batch_detail', function (Blueprint $table) {
            $table->integer('batch_detail_id', true);
            $table->integer('batch_id')->default(0);
            $table->integer('plot_id')->default(0);
            $table->integer('member_id')->default(0);
            $table->string('receipt_no', 20)->nullable();
            $table->date('payment_date')->nullable();
            $table->double('amount')->default(0);
            $table->double('taxable_value')->default(0);
            $table->date('ms_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_tax_batch_detail');
    }
};
