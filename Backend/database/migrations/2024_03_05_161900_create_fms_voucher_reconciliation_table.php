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
        Schema::create('fms_voucher_reconciliation', function (Blueprint $table) {
            $table->bigInteger('voucher_id')->default(0)->primary();
            $table->text('member_name')->nullable();
            $table->text('cnic')->nullable();
            $table->double('amount')->default(0);
            $table->integer('amount_type')->default(0);
            $table->integer('entry_status')->default(0);
            $table->date('entry_date')->nullable();
            $table->date('transaction_date')->nullable();
            $table->string('instrument_no', 300)->nullable();
            $table->text('receipt_no')->nullable();
            $table->text('jv_no')->nullable();
            $table->text('ms_no')->nullable();
            $table->text('application_no')->nullable();
            $table->string('sales_center', 300)->nullable();
            $table->string('project_code', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_voucher_reconciliation');
    }
};
