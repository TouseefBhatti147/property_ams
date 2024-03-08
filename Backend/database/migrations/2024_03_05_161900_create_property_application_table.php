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
        Schema::create('property_application', function (Blueprint $table) {
            $table->bigInteger('application_id', true);
            $table->integer('project_id');
            $table->integer('sales_center_id');
            $table->bigInteger('member_id')->index('idx_member_id');
            $table->bigInteger('membership_id')->nullable();
            $table->integer('plot_id')->nullable();
            $table->string('application_no', 50);
            $table->date('application_date');
            $table->integer('property_type');
            $table->integer('property_size');
            $table->integer('dealer_id')->nullable()->default(56024);
            $table->integer('nominee_id')->nullable()->default(0);
            $table->bigInteger('voucher_id')->default(0);
            $table->integer('property_against');
            $table->integer('installment_plan')->nullable();
            $table->date('plan_start_date')->nullable();
            $table->integer('application_status');
            $table->integer('installment_plan_development')->default(0);
            $table->string('membership_no', 20)->nullable();
            $table->integer('application_fstatus')->default(0);
            $table->integer('receipt_entered')->default(0);
            $table->date('submission_date')->nullable();
            $table->string('submission_remarks', 1000)->nullable();
            $table->integer('owner_id')->nullable();
            $table->integer('is_reserved_plot')->nullable();
            $table->integer('registration_source')->default(0);
            $table->integer('eform_status')->default(0);
            $table->bigInteger('eform_id')->default(0);
            $table->integer('user_id');
            $table->integer('updated_by');
            $table->dateTime('entered_on');
            $table->dateTime('updated_on');
            $table->integer('submitted_by');
            $table->integer('posted_by');
            $table->dateTime('submitted_on');
            $table->dateTime('posted_on');
            $table->integer('dealer2_id')->nullable();
            $table->integer('dealer3_id')->nullable();
            $table->integer('application_type')->default(0);
            $table->integer('tag1_id');
            $table->integer('edit_required')->default(0);
            $table->integer('confirmation_required')->default(0);
            $table->integer('edit_request_user')->default(0);
            $table->dateTime('edit_request_date')->nullable();
            $table->dateTime('confirmation_date')->nullable();
            $table->string('confirmation_remarks', 2000)->nullable();
            $table->string('edit_request_remarks', 2000)->nullable();
            $table->integer('status_on_request')->default(0);
            $table->integer('feature_category_id')->default(0);
            $table->integer('design_id')->default(0);
            $table->integer('reg_source')->default(0);
            $table->integer('tag2_id')->nullable()->default(0);
            $table->integer('application_sub_type')->default(0)->comment('1: normal booking, 2: open booking, ');
            $table->integer('discount_type')->default(0);
            $table->decimal('discount_percent', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_application');
    }
};
