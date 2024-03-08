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
        Schema::create('fms_trans_master', function (Blueprint $table) {
            $table->integer('trans_id', true);
            $table->string('serial_no', 20)->nullable();
            $table->integer('trans_type');
            $table->date('trans_date');
            $table->string('remarks', 1000)->nullable();
            $table->integer('entered_by');
            $table->string('ref_no', 200)->nullable()->comment('cheque no, etc');
            $table->integer('project_id');
            $table->integer('sales_center_id');
            $table->integer('external_trans_type')->default(0)->comment('0: custom entry, 1: dealer, 2: member, 101: instrument (receipts)');
            $table->integer('parent_id')->default(0);
            $table->integer('status')->nullable();
            $table->string('verification_remarks', 1000)->nullable();
            $table->string('deposit_slip_no', 500)->nullable();
            $table->string('depsit_remarks', 1000)->nullable();
            $table->string('submission_remarks', 1000)->nullable();
            $table->integer('target_bank_id')->nullable();
            $table->date('deposit_date')->nullable();
            $table->date('clearance_date')->nullable();
            $table->integer('is_advance')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_trans_master');
    }
};
