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
        Schema::create('plots_reporting', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('project_id')->nullable()->default(1);
            $table->string('dealer')->nullable();
            $table->string('project')->nullable();
            $table->integer('plot_id')->nullable()->default(0)->index('plot_id');
            $table->integer('member_id')->nullable()->default(0);
            $table->string('ms_no', 100)->nullable();
            $table->string('comp_ms_no')->nullable();
            $table->string('ms_id')->nullable();
            $table->string('curr_ms')->nullable();
            $table->string('parent_ms_id')->nullable();
            $table->integer('child_status')->nullable()->default(0);
            $table->integer('allocation_status')->nullable()->default(0);
            $table->integer('temp_allocation_id')->nullable()->default(0);
            $table->integer('temp_property_id')->nullable()->default(0);
            $table->integer('size_id')->nullable()->default(0);
            $table->string('size', 100)->nullable();
            $table->string('size_sq_yd', 100)->nullable()->comment('size');
            $table->string('size_in_sft', 100)->nullable();
            $table->string('size_code', 100)->nullable();
            $table->tinyInteger('size_ordering')->nullable()->default(0);
            $table->tinyInteger('property_type_id')->nullable()->default(0);
            $table->string('property_type')->nullable();
            $table->string('specs')->nullable();
            $table->integer('application_id')->nullable()->default(0);
            $table->string('application_no')->nullable();
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
            $table->integer('charges_payable')->nullable();
            $table->integer('charges_paid_amount')->nullable();
            $table->tinyInteger('charges_paid_amount_per')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('cnic')->nullable();
            $table->string('pic')->nullable();
            $table->string('phone')->nullable();
            $table->string('user_name')->nullable();
            $table->string('address')->nullable();
            $table->integer('ac_slip_id')->nullable()->default(0);
            $table->date('ac_slip_date')->nullable();
            $table->boolean('choice_1')->nullable()->default(false);
            $table->boolean('choice_2')->nullable()->default(false);
            $table->boolean('choice_3')->nullable()->default(false);
            $table->boolean('choice_4')->nullable()->default(false);
            $table->boolean('choice_5')->nullable()->default(false);
            $table->boolean('choice_6')->nullable()->default(false);
            $table->boolean('choice_7')->nullable()->default(false);
            $table->boolean('choice_8')->nullable()->default(false);
            $table->boolean('choice_9')->nullable()->default(false);
            $table->boolean('choice_10')->nullable()->default(false);
            $table->string('choices_ids', 100)->nullable();
            $table->integer('property_id')->nullable()->default(0);
            $table->integer('payable_to_date')->nullable()->default(0);
            $table->integer('overdue_to_date')->nullable();
            $table->tinyInteger('overdue_to_date_per')->nullable();
            $table->integer('paid_to_date')->nullable();
            $table->tinyInteger('paid_to_date_per')->nullable();
            $table->integer('ballotable_index')->nullable()->default(0);
            $table->integer('ballotable_index2')->nullable()->default(0);
            $table->integer('ballotable_status')->nullable()->default(0);
            $table->integer('block_index')->nullable()->default(0);
            $table->boolean('excluded')->nullable()->default(false);
            $table->boolean('on_hold')->nullable()->default(false);
            $table->integer('cutoff_date_payable')->nullable();
            $table->integer('cutoff_date_paid')->nullable()->default(0);
            $table->integer('cutoff_date_paid_per')->nullable()->default(0);
            $table->integer('cutoff_date_overdue_per')->nullable()->default(0);
            $table->integer('installment_plan_id')->nullable()->default(0)->index('installment_plan_id');
            $table->integer('tag2_id')->nullable()->default(0);
            $table->integer('activation_status')->nullable()->default(0);
            $table->integer('total_installments')->nullable()->default(0);
            $table->integer('paid_installments')->nullable()->default(0);
            $table->integer('overdue_installments')->nullable()->default(0);
            $table->integer('paid_installments_partial')->nullable()->default(0);
            $table->integer('dev_cost')->nullable()->default(0);
            $table->integer('pl_cost')->nullable()->default(0);
            $table->integer('ex_land_cost')->nullable()->default(0);
            $table->string('plan_description')->nullable();
            $table->tinyInteger('plan_type')->nullable()->default(0);
            $table->integer('user_id')->nullable();
            $table->string('sales_center')->nullable();
            $table->tinyInteger('design_id')->nullable()->default(0);
            $table->tinyInteger('feature_id')->nullable()->default(0);
            $table->date('last_payment_date')->nullable();
            $table->integer('sector_id')->nullable()->default(0);
            $table->integer('due_until_1')->nullable();
            $table->integer('due_until_2')->nullable();
            $table->integer('due_until_3')->nullable();
            $table->integer('due_until_4')->nullable();
            $table->integer('due_until_3_upfront')->nullable();
            $table->boolean('is_regular')->nullable()->default(false);
            $table->integer('installments_paid_ontime')->nullable()->default(0);
            $table->integer('installments_paid_delayed')->nullable()->default(0);
            $table->boolean('map_location_marked')->nullable()->default(false);
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->boolean('ac_slip_mode')->nullable()->default(true);
            $table->integer('temp_tag1_id')->nullable();
            $table->boolean('is_joint')->nullable()->default(false);
            $table->integer('rebate_amount')->nullable()->default(0);
            $table->integer('paid_until_1')->nullable()->default(0);
            $table->integer('paid_until_2')->nullable()->default(0);
            $table->integer('paid_until_3')->nullable()->default(0);
            $table->integer('paid_until_4')->nullable()->default(0);
            $table->tinyInteger('due_until_1_per')->nullable()->default(0);
            $table->tinyInteger('due_until_2_per')->nullable()->default(0);
            $table->tinyInteger('due_until_3_per')->nullable()->default(0);
            $table->tinyInteger('due_until_4_per')->nullable()->default(0);
            $table->integer('due_until_3_upfront_per')->nullable()->default(0);
            $table->integer('paid_until_1_per')->nullable();
            $table->integer('paid_until_2_per')->nullable();
            $table->integer('paid_until_3_per')->nullable();
            $table->integer('paid_until_4_per')->nullable();
            $table->integer('overdue_until_4')->nullable();
            $table->integer('overdue_until_4_per')->nullable();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plots_reporting');
    }
};
