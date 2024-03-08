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
        Schema::create('fms_voucher_plot_detail', function (Blueprint $table) {
            $table->bigInteger('voucher_plot_detail_id', true);
            $table->bigInteger('voucher_id')->nullable()->index('voucher_id');
            $table->unsignedInteger('plot_id')->default(0)->index('plot_id');
            $table->bigInteger('membership_id')->nullable();
            $table->bigInteger('serial_no')->nullable()->default(0);
            $table->double('amount')->nullable()->default(0);
            $table->integer('project_id')->nullable()->default(0);
            $table->string('receipt_no', 20)->nullable();
            $table->string('narration', 1000)->nullable();
            $table->integer('application_id')->nullable();
            $table->integer('transaction_source')->nullable()->default(0)->comment('application, installment/membership, transfer');
            $table->string('jv_no', 50)->nullable();
            $table->string('deposit_slip_no', 100)->nullable();
            $table->integer('target_bank_id')->nullable();
            $table->date('deposit_date')->nullable();
            $table->date('clearance_date')->nullable();
            $table->integer('is_joint')->nullable()->default(0);
            $table->integer('ms_status')->nullable()->default(0);
            $table->integer('receipt_status')->nullable()->default(0);
            $table->string('qr_format', 100)->nullable();
            $table->boolean('filing_status')->nullable()->default(true)->comment('[1=pending , 2=filed , 3=onhold]');
            $table->dateTime('filing_date')->nullable();
            $table->text('filing_comments')->nullable();
            $table->integer('filed_by_user_id')->nullable();
            $table->integer('member_id')->default(0)->index('fms_voucher_plot_detail_member_id');
            $table->string('dealer_name', 500)->nullable();
            $table->integer('printing_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_voucher_plot_detail');
    }
};
