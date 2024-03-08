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
        Schema::create('balloting_data', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('project_id')->nullable()->default(1);
            $table->integer('plot_id')->nullable()->default(0)->index('idx_plot_id');
            $table->integer('member_id')->nullable()->default(0);
            $table->string('ms_no', 100)->nullable();
            $table->string('comp_ms_no')->nullable();
            $table->string('ms_id')->nullable();
            $table->string('curr_ms')->nullable();
            $table->string('parent_ms_id')->nullable();
            $table->integer('allocation_status')->nullable()->default(0);
            $table->integer('size_id')->nullable()->default(0)->index('idx_size_id');
            $table->tinyInteger('size_ordering')->nullable()->default(0);
            $table->tinyInteger('property_type_id')->nullable()->default(0);
            $table->tinyInteger('ms_type')->nullable()->default(0);
            $table->tinyInteger('ms_status')->nullable()->default(0);
            $table->date('ms_date')->nullable();
            $table->date('booking_date')->nullable();
            $table->integer('tag1_id')->nullable()->default(0);
            $table->tinyInteger('down_payment_per')->nullable()->default(0);
            $table->integer('down_payment_payable')->nullable();
            $table->integer('down_payment_paid')->nullable();
            $table->tinyInteger('down_payment_paid_per')->nullable();
            $table->integer('choices')->nullable()->default(0);
            $table->integer('balloting_id')->nullable()->default(0);
            $table->integer('dealer_id')->nullable()->default(0);
            $table->integer('price')->nullable()->default(0);
            $table->integer('paid_amount')->nullable()->default(0);
            $table->integer('bounced_amount')->nullable()->default(0);
            $table->integer('discount')->nullable()->default(0);
            $table->integer('net_price')->nullable()->default(0);
            $table->integer('paid_amount_per')->nullable()->default(0);
            $table->integer('due_amount')->nullable();
            $table->integer('overdue_amount')->nullable()->default(0);
            $table->tinyInteger('overdue_per')->nullable();
            $table->integer('payable_amount')->nullable();
            $table->integer('ac_slip_id')->nullable()->default(0);
            $table->boolean('choice_1')->nullable()->default(false);
            $table->boolean('choice_2')->nullable()->default(false);
            $table->boolean('choice_3')->nullable()->default(false);
            $table->boolean('choice_4')->nullable()->default(false);
            $table->boolean('choice_5')->nullable()->default(false);
            $table->string('choices_ids', 100)->nullable();
            $table->integer('property_id')->nullable()->default(0);
            $table->integer('ballotable_index')->nullable()->default(0);
            $table->integer('ballotable_index2')->nullable()->default(0);
            $table->integer('ballotable_status')->nullable()->default(0);
            $table->integer('block_index')->nullable()->default(0);
            $table->boolean('excluded')->nullable()->default(false);
            $table->boolean('on_hold')->nullable()->default(false);
            $table->integer('tag2_id')->nullable()->default(0);
            $table->integer('activation_status')->nullable()->default(0);
            $table->integer('total_installments')->nullable()->default(0);
            $table->integer('paid_installments')->nullable()->default(0);
            $table->integer('overdue_installments')->nullable()->default(0);
            $table->integer('paid_installments_partial')->nullable()->default(0);
            $table->tinyInteger('design_id')->nullable()->default(0);
            $table->tinyInteger('feature_id')->nullable()->default(0);
            $table->integer('sector_id')->nullable()->default(0);
            $table->integer('due_until_1')->nullable();
            $table->integer('due_until_2')->nullable();
            $table->integer('due_until_3')->nullable();
            $table->integer('due_until_4')->nullable();
            $table->boolean('is_regular')->nullable()->default(false);
            $table->integer('installments_paid_ontime')->nullable()->default(0);
            $table->integer('installments_paid_delayed')->nullable()->default(0);
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('rebate_amount')->nullable()->default(0);
            $table->integer('paid_until_1')->nullable()->default(0);
            $table->integer('paid_until_2')->nullable()->default(0);
            $table->integer('paid_until_3')->nullable()->default(0);
            $table->integer('paid_until_4')->nullable()->default(0);
            $table->integer('plan_id')->nullable()->default(0);
            $table->integer('prev_tag1_id')->nullable()->default(0);
            $table->boolean('ac_slip_mode')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_data');
    }
};
