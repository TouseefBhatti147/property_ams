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
        Schema::create('fms_voucher', function (Blueprint $table) {
            $table->bigInteger('voucher_id', true);
            $table->integer('bank_id')->nullable();
            $table->date('entry_date')->nullable();
            $table->date('transaction_date')->nullable();
            // Change VARCHAR columns to TEXT or BLOB types
            $table->text('voucher_sr_no')->nullable();
            $table->text('narration')->nullable();
            $table->text('center_remarks')->nullable();
            $table->text('verification_remarks')->nullable();
            $table->text('approval_remarks')->nullable();
            $table->text('bounced_trans_remarks')->nullable();
            $table->text('represent_trans_remarks')->nullable();
            $table->text('prev_instrument_no')->nullable();
            $table->text('cancellation_trans_remarks')->nullable();
            $table->text('cash_supervision_remarks')->nullable();
            $table->text('editing_remarks')->nullable();
            $table->text('confirmation_remarks')->nullable();
            $table->text('edit_request_remarks')->nullable();
            $table->text('receipts_cancellation_remarks')->nullable();
            // Add other columns...
        });
    }
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_voucher');
    }
};
