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
        Schema::create('plots_meta_specific', function (Blueprint $table) {
            $table->bigInteger('plot_id')->primary();
            $table->decimal('discount', 10)->default(0);
            $table->decimal('discount_inst', 10)->default(0);
            $table->decimal('discount_pl', 10)->default(0);
            $table->decimal('discount_dev', 10)->default(0);
            $table->decimal('discount_el', 10)->default(0);
            $table->decimal('discount_ec', 10)->default(0);
            $table->decimal('discount_ew', 10)->default(0);
            $table->decimal('rebate', 10)->default(0);
            $table->decimal('rebate_inst', 10)->default(0);
            $table->decimal('rebate_pl', 10)->default(0);
            $table->decimal('rebate_dev', 10)->default(0);
            $table->decimal('rebate_el', 10)->default(0);
            $table->decimal('rebate_ec', 10)->default(0);
            $table->decimal('rebate_ew', 10)->default(0);
            $table->decimal('due_inst_amount', 18)->default(0);
            $table->decimal('due_pl_amount', 10)->default(0);
            $table->decimal('due_dev_amount', 10)->default(0);
            $table->decimal('due_el_amount', 10)->default(0);
            $table->decimal('due_ec_amount', 10)->default(0);
            $table->decimal('due_ew_amount', 10)->default(0);
            $table->integer('no_of_inst_due')->default(0);
            $table->integer('no_of_pl_inst_due')->default(0);
            $table->integer('no_of_dev_inst_due')->default(0);
            $table->integer('no_of_el_inst_due')->default(0);
            $table->integer('no_of_ec_inst_due')->default(0);
            $table->integer('no_of_ew_inst_due')->default(0);
            $table->decimal('paid_inst_amount', 10)->default(0);
            $table->decimal('paid_pl_amount', 10)->default(0);
            $table->decimal('paid_dev_amount', 10)->default(0);
            $table->decimal('paid_el_amount', 10)->default(0);
            $table->decimal('paid_ec_amount', 10)->default(0);
            $table->decimal('paid_ew_amount', 10)->default(0);
            $table->decimal('bounced_inst_amount', 10)->default(0);
            $table->decimal('bounced_pl_amount', 10)->default(0);
            $table->decimal('bounced_dev_amount', 10)->default(0);
            $table->decimal('bounced_el_amount', 10)->default(0);
            $table->decimal('bounced_ec_amount', 10)->default(0);
            $table->decimal('bounced_ew_amount', 10)->default(0);
            $table->integer('no_of_unpaid_inst')->default(0);
            $table->integer('no_of_unpaid_pl_inst')->default(0);
            $table->integer('no_of_unpaid_dev_inst')->default(0);
            $table->integer('no_of_unpaid_el_inst')->default(0);
            $table->integer('no_of_unpaid_ec_inst')->default(0);
            $table->integer('no_of_unpaid_ew_inst')->default(0);
            $table->integer('no_of_paid_inst')->default(0);
            $table->integer('no_of_paid_pl_inst')->default(0);
            $table->integer('no_of_paid_dev_inst')->default(0);
            $table->integer('no_of_paid_el_inst')->default(0);
            $table->integer('no_of_paid_ec_inst')->default(0);
            $table->integer('no_of_paid_ew_inst')->default(0);
            $table->integer('no_of_part_inst')->default(0);
            $table->integer('no_of_part_pl_inst')->default(0);
            $table->integer('no_of_part_dev_inst')->default(0);
            $table->integer('no_of_part_el_inst')->default(0);
            $table->integer('no_of_part_ec_inst')->default(0);
            $table->integer('no_of_part_ew_inst')->default(0);
            $table->integer('no_of_cancelled_ew_inst')->default(0);
            $table->decimal('cancelled_ew_amount', 10)->default(0);
            $table->dateTime('updated_on')->nullable();
            $table->decimal('ms_fee_due', 10)->default(0);
            $table->decimal('ms_fee_paid', 10)->default(0);
            $table->decimal('ms_fee_waived', 10)->default(0);
            $table->decimal('transfer_fee_due', 10)->default(0);
            $table->decimal('transfer_fee_paid', 10)->default(0);
            $table->decimal('transfer_fee_waived', 10)->default(0);
            $table->decimal('comp_fee_due', 10)->default(0);
            $table->decimal('comp_fee_paid', 10)->default(0);
            $table->decimal('comp_fee_waived', 10)->default(0);
            $table->decimal('map_charges_due', 10)->default(0);
            $table->decimal('map_charges_paid', 10)->default(0);
            $table->decimal('map_charges_waived', 10)->default(0);
            $table->decimal('spa_due', 10)->default(0);
            $table->decimal('spa_paid', 10)->default(0);
            $table->decimal('spa_waived', 10)->default(0);
            $table->decimal('gpa_due', 10)->default(0);
            $table->decimal('gpa_paid', 10)->default(0);
            $table->decimal('gpa_waived', 10)->default(0);
            $table->decimal('loss_doc_due', 10)->default(0);
            $table->decimal('loss_doc_paid', 10)->default(0);
            $table->decimal('loss_doc_waived', 10)->default(0);
            $table->decimal('doc_ammend_due', 10)->default(0);
            $table->decimal('doc_ammend_paid', 10)->default(0);
            $table->decimal('doc_ammend_waived', 10)->default(0);
            $table->decimal('lien_due', 10)->default(0);
            $table->decimal('lien_paid', 10)->default(0);
            $table->decimal('lien_waived', 10)->default(0);
            $table->decimal('urgent_transfer_due', 10)->default(0);
            $table->decimal('urgent_transfer_paid', 10)->default(0);
            $table->decimal('urgent_transfer_waived', 10)->default(0);
            $table->decimal('sod_renewal_due', 10)->default(0);
            $table->decimal('sod_renewal_paid', 10)->default(0);
            $table->decimal('sod_renewal_waived', 10)->default(0);
            $table->decimal('merger_fee_due', 10)->default(0);
            $table->decimal('merger_fee_paid', 10)->default(0);
            $table->decimal('merger_fee_waived', 10)->default(0);
            $table->decimal('remarea_due', 10)->default(0);
            $table->decimal('remarea_paid', 10)->default(0);
            $table->decimal('remarea_waived', 10)->default(0);
            $table->decimal('hiba_due', 10)->default(0);
            $table->decimal('hiba_paid', 10)->default(0);
            $table->decimal('hiba_waived', 10)->default(0);
            $table->decimal('allotcert_due', 10)->default(0);
            $table->decimal('allotcert_paid', 10)->default(0);
            $table->decimal('allotcert_waived', 10)->default(0);
            $table->decimal('allotcertdisp_due', 10)->default(0);
            $table->decimal('allotcertdisp_paid', 10)->default(0);
            $table->decimal('allotcertdisp_waived', 10)->default(0);
            $table->decimal('intservice_due', 10)->default(0);
            $table->decimal('intservice_paid', 10)->default(0);
            $table->decimal('int_service_waived', 10)->default(0);
            $table->text('meta_value')->nullable();
            $table->integer('ms_type')->default(0);
            $table->date('ms_created_no')->nullable();
            $table->integer('ms_status')->default(0);
            $table->integer('allocation_id')->default(0);
            $table->integer('alloc_type')->default(0);
            $table->decimal('percent_value_inst', 10, 0)->default(0);
            $table->integer('ms_sub_type')->default(0);
            $table->decimal('inst_surcharge', 10)->default(0);
            $table->decimal('pl_surcharge', 10)->default(0);
            $table->decimal('dev_surcharge', 10)->default(0);
            $table->decimal('el_surcharge', 10)->default(0);
            $table->decimal('ew_surcharge', 10)->default(0);
            $table->decimal('ec_surcharge', 10)->default(0);
            $table->integer('own')->default(0);
            $table->integer('rate_variation')->default(0);
            $table->double('installment_tax')->default(0);
            $table->double('installment_tax_paid')->default(0);
            $table->double('installment_tax_due')->default(0);
            $table->double('transfer_tax')->default(0);
            $table->double('transfer_tax_paid')->default(0);
            $table->double('cvt_due')->default(0);
            $table->double('cvt_paid')->default(0);
            $table->decimal('adv_tax_amount', 10, 0)->default(0);
            $table->decimal('due_adv_tax_amount', 10, 0)->default(0);
            $table->decimal('paid_adv_tax_amount', 10, 0)->default(0);
            $table->decimal('bounced_adv_tax_amount', 10, 0)->default(0);
            $table->decimal('tax_236c_due', 10, 0)->default(0);
            $table->decimal('tax_236c_paid', 10, 0)->default(0);
            $table->decimal('tax_236c_bounced', 10, 0)->default(0);
            $table->decimal('tax_236k_due', 10, 0)->default(0);
            $table->decimal('tax_236k_paid', 10, 0)->default(0);
            $table->decimal('tax_236k_bounced', 10, 0)->default(0);
            $table->decimal('unposted_adv_tax', 10, 0)->default(0);
            $table->decimal('unposted_236c_tax', 10, 0)->default(0);
            $table->decimal('unposted_236k_tax', 10, 0)->default(0);
            $table->decimal('verified_inst_amount', 10)->default(0);
            $table->decimal('verified_dev_amount', 10)->default(0);
            $table->decimal('verified_pl_amount', 10)->default(0);
            $table->decimal('verified_el_amount', 10)->default(0);
            $table->decimal('verified_ec_amount', 10)->default(0);
            $table->decimal('verified_ew_amount', 10)->default(0);
            $table->decimal('due_excess_amount', 10)->default(0);
            $table->decimal('paid_excess_amount', 10)->default(0);
            $table->decimal('verified_excess_amount', 10)->default(0);
            $table->decimal('surcharge_due', 10)->default(0);
            $table->decimal('surcharge_paid', 10)->default(0);
            $table->decimal('surcharge_bounced', 10)->default(0);
            $table->decimal('surcharge_verified', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plots_meta_specific');
    }
};
