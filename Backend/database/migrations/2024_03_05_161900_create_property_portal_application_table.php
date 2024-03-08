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
        Schema::create('property_portal_application', function (Blueprint $table) {
            $table->bigInteger('application_id', true);
            $table->integer('project_id')->nullable()->default(0);
            $table->integer('sales_center_id')->nullable()->default(0);
            $table->bigInteger('member_id')->default(0);
            $table->bigInteger('membership_id')->nullable()->default(0);
            $table->integer('plot_id')->nullable()->default(0);
            $table->string('application_no', 50)->nullable();
            $table->date('application_date')->nullable();
            $table->integer('property_type');
            $table->integer('property_size')->comment('price_id from plot_prices table');
            $table->integer('dealer_id')->nullable()->default(56024);
            $table->integer('nominee_id')->nullable()->default(0);
            $table->bigInteger('voucher_id');
            $table->integer('property_against')->default(3)->comment('1=land  , 3=installments');
            $table->integer('installment_plan')->nullable();
            $table->date('plan_start_date')->nullable();
            $table->integer('application_status');
            $table->integer('installment_plan_development');
            $table->string('membership_no', 20)->nullable();
            $table->integer('application_fstatus');
            $table->integer('receipt_entered')->nullable();
            $table->date('submission_date')->nullable();
            $table->string('submission_remarks', 1000)->nullable();
            $table->integer('owner_id')->nullable()->default(0);
            $table->integer('is_reserved_plot')->nullable();
            $table->integer('registration_source')->comment(' 1 => "Members Portal",
            2 => "Dealers Portal",
            3 => "Android APP CSC",
            4 => "IOS APP CSC"');
            $table->integer('eform_status')->comment('pending, verified');
            $table->decimal('payable_price', 10, 0)->nullable();
            $table->decimal('payable_down_payment', 10, 0)->nullable();
            $table->decimal('payable_discount', 10, 0)->nullable();
            $table->decimal('payable_ms_fee', 10, 0)->nullable();
            $table->decimal('payable_amount', 10, 0)->nullable();
            $table->integer('payment_package_id')->nullable();
            $table->integer('payment_method')->nullable()->comment('manual, online');
            $table->integer('bank_acc_id')->nullable()->comment('bank_id, credit card, debit card, other');
            $table->string('bank_branch', 1000)->nullable();
            $table->integer('payment_trans_type')->default(0)->comment('Online Transfer/Through IBAN, Cheque, PO, DD etc.');
            $table->string('payment_trans_no', 200)->default('0');
            $table->date('payment_trans_date')->nullable();
            $table->string('payment_trans_attachment', 1000)->nullable();
            $table->string('allocation_remarks', 1000)->nullable();
            $table->integer('registered_through')->comment(' 1 => "Members Portal",
            2 => "Dealers Portal",
            3 => "Android APP CSC",
            4 => "IOS APP CSC"');
            $table->integer('submission_status');
            $table->double('service_charges')->nullable()->default(0);
            $table->double('total_amount')->default(0);
            $table->integer('sys_trans_id')->nullable()->default(0);
            $table->decimal('paid_ms_fee', 10, 0)->nullable()->default(0);
            $table->decimal('paid_booking_amount', 10, 0)->nullable()->default(0);
            $table->string('eform_copy', 100)->nullable();
            $table->string('other_attachment', 100)->nullable();
            $table->string('finance_ver_remarks', 1000)->nullable();
            $table->integer('verified_by')->nullable()->default(0);
            $table->dateTime('verification_date')->nullable();
            $table->string('eform_copy2', 100)->nullable();
            $table->integer('design_id')->nullable();
            $table->integer('feature_id')->nullable();
            $table->integer('building_unit_id')->nullable()->default(0);
            $table->integer('plan_type_id')->nullable()->default(2);
            $table->boolean('is_expired')->nullable()->default(false);
            $table->tinyInteger('ref_by')->nullable()->default(1)->comment('1= Direct
2= Dealer');
            $table->string('ref_by_dealer_name')->nullable();
            $table->string('ref_by_dealer_business')->nullable();
            $table->tinyInteger('payment_source_type')->nullable()->comment('0 = skip payment | not Paid
1 = payment evidence (bank, PO, DD)
2 = dealer
3 = visa/master card');
            $table->string('nominee_cnic_pic')->nullable();
            $table->string('nominee_cnic_pic_back')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('property_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_portal_application');
    }
};
