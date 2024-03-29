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
        Schema::create('tmp_balloting_crit', function (Blueprint $table) {
            $table->integer('plot_id');
            $table->integer('ms_status');
            $table->date('booking_date');
            $table->date('ms_date');
            $table->integer('slip_issued');
            $table->date('slip_date');
            $table->integer('downpayment_type')->comment('10,20,40,50,100 percent');
            $table->decimal('payable_downpayment', 10, 0);
            $table->decimal('paid_downpayment', 10, 0);
            $table->decimal('total_payable_inst_amount', 10, 0);
            $table->decimal('payable_charges', 10, 0);
            $table->integer('total_inst_count')->comment('no of installments');
            $table->decimal('total_inst_amount_paid', 10, 0);
            $table->decimal('total_charges_paid', 10, 0);
            $table->integer('total_inst_paid')->comment('no of installments');
            $table->decimal('pending_inst_on_cheque', 10, 0);
            $table->decimal('bounced_inst_amount', 10, 0);
            $table->decimal('curr_bounced_amount', 10, 0);
            $table->decimal('curr_payable_inst_amount', 10, 0);
            $table->decimal('curr_paid_inst_amount', 10, 0);
            $table->integer('curr_inst_payable')->comment('no of installments');
            $table->integer('curr_inst_paid')->comment('no of installments');
            $table->decimal('paid_percent', 10, 0);
            $table->decimal('overdue_percent', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmp_balloting_crit');
    }
};
