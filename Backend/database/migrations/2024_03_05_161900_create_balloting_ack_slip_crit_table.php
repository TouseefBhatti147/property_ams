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
        Schema::create('balloting_ack_slip_crit', function (Blueprint $table) {
            $table->integer('plot_id')->default(0)->index('idx_plot_id');
            $table->integer('balloting_id')->default(0);
            $table->text('ms_no')->nullable();
            $table->text('size_title')->nullable();
            $table->text('tag1_title')->nullable();
            $table->integer('ms_type')->default(0);
            $table->decimal('price', 10, 0)->default(0);
            $table->integer('down_payment_per')->default(0);
            $table->decimal('discount', 10, 0)->default(0);
            $table->decimal('fifty_percent_amount', 10, 0)->default(0);
            $table->decimal('due_upto_cutoff_date', 10, 0)->default(0);
            $table->decimal('due_percent', 10, 0)->default(0);
            $table->decimal('paid_amount', 10, 0)->default(0);
            $table->decimal('paid_percent', 10, 0)->default(0);
            $table->decimal('amount_req_for_slip', 10, 0)->default(0);
            $table->decimal('precent_req_for_slip', 10, 0)->default(0);
            $table->decimal('amount_req_for_alloc', 10, 0)->default(0);
            $table->decimal('precent_req_for_allocation', 10, 0)->default(0);
            $table->decimal('payable_amount', 10, 0)->default(0);
            $table->decimal('paid_upto_cutoff_date', 10)->default(0);
            $table->timestamps(); // Add timestamps

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_ack_slip_crit');
    }
};
