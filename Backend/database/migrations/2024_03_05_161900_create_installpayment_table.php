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
        Schema::create('installpayment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ref')->default(0);
            $table->integer('ref2')->default(0)->index('ref2');
            $table->integer('plot_id')->index('plot_id');
            $table->integer('ms_id')->default(0)->index('installpayment_ms_id');
            $table->double('mem_id')->index('installpayment_mem_id');
            $table->bigInteger('voucher_plot_detail_id')->default(0)->index('installpayment_voucher_plot_detail_id');
            $table->double('paidamount')->default(0);
            $table->double('dueamount')->default(0);
            $table->date('due_date');
            $table->integer('trans_type')->index('installpayment_trans_type')->comment('membership fee, insatllments, transfer fee, other');
            $table->integer('trans_sub_type')->default(0);
            $table->integer('activation_status');
            $table->integer('payment_status')->default(0);
            $table->integer('installment_no')->default(0);
            $table->string('lab');
            $table->integer('user_id')->default(0);
            $table->string('remarks', 200)->nullable();
            $table->double('discount')->default(0);
            $table->double('surcharge')->default(0);
            $table->double('paidsurcharge')->default(0);
            $table->string('paidas', 200)->nullable();
            $table->string('detail', 200)->nullable();
            $table->date('date')->nullable()->comment('entry_date from fms_voucher table');
            $table->string('others', 200)->nullable();
            $table->dateTime('paid_date')->nullable();
            $table->string('fstatus', 256)->nullable();
            $table->integer('fid')->default(0);
            $table->integer('plan_type')->nullable()->comment('installment plan, development plan, common plan');
            $table->integer('transaction_source')->default(0)->comment('application, installment, transfer');
            $table->string('payment_type', 256)->nullable();
            $table->integer('payable_ms_id')->default(0);
            $table->integer('category_id')->default(0)->comment('charges_id ,  id=primary key of charges table');
            $table->integer('against')->default(0);
            $table->integer('voucher_id')->default(0)->index('installpayment_voucher_id');
            $table->integer('surchargable_days')->default(0);
            $table->date('surcharge_upto')->nullable();
            $table->integer('surcharge_status')->default(0);
            $table->bigInteger('child_id')->default(0);
            $table->integer('modified_by')->default(0);
            $table->dateTime('created_on')->useCurrent();
            $table->dateTime('modified_on')->useCurrent();
            $table->tinyInteger('use_for_paypro')->default(0);
            $table->boolean('partial_pending')->nullable()->default(false);
            $table->string('attachment')->nullable();
            $table->integer('amount_type')->nullable()->default(0);
            $table->string('instrument_no', 100)->nullable();
            $table->date('instrument_date')->nullable();
            $table->integer('entry_status')->nullable()->default(0);
            $table->string('receipt_no', 50)->nullable();
            $table->string('deposit_slip_no', 100)->nullable();
            $table->integer('voucher_cancellation_type')->nullable()->default(0);
            $table->integer('receipt_status')->nullable()->default(0);
            $table->double('percent_value')->nullable()->default(0);
            $table->bigInteger('ms_fbr_rate_id')->default(0);
            $table->double('percent_value2')->default(0);
            $table->double('taxable_value')->default(0);
            $table->integer('tax_batch_id')->default(0);
            $table->double('percent_value3')->default(0);
            $table->integer('old_id')->nullable();
            $table->integer('source_receipt_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installpayment');
    }
};
