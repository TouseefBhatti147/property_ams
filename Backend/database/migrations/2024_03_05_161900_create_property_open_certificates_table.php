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
        Schema::create('property_open_certificates', function (Blueprint $table) {
            $table->integer('certificate_id', true);
            $table->integer('plot_id');
            $table->integer('member_id');
            $table->string('ms_no', 30);
            $table->integer('ms_status');
            $table->dateTime('created_on');
            $table->dateTime('modified_on');
            $table->integer('is_joint')->nullable();
            $table->integer('parent_ms_id')->nullable();
            $table->integer('user_id');
            $table->integer('is_active')->comment('1: property only, 2: finance only, 3: both');
            $table->date('submission_date')->nullable();
            $table->string('submission_remarks', 1000)->nullable();
            $table->date('verification_date')->nullable();
            $table->string('verification_remarks', 1000)->nullable();
            $table->date('approval_date')->nullable();
            $table->string('approval_remarks', 1000)->nullable();
            $table->integer('ms_type');
            $table->string('form_no', 100);
            $table->integer('nominee_id');
            $table->integer('application_id');
            $table->integer('dealer_id');
            $table->integer('dealer2_id');
            $table->integer('dealer3_id');
            $table->integer('child_status');
            $table->integer('sales_center_id');
            $table->string('purchaser_pic', 100);
            $table->string('seller_pic', 100);
            $table->date('doc_submission_due_date')->nullable();
            $table->time('doc_submission_time')->nullable();
            $table->string('doc_submission_remarks', 2000)->nullable();
            $table->integer('doc_submitted_by')->nullable();
            $table->date('doc_collection_due_date')->nullable();
            $table->time('doc_collection_time')->nullable();
            $table->integer('doc_collected_by')->nullable();
            $table->string('doc_collection_remarks', 2000)->nullable();
            $table->integer('doc_submission_status')->nullable();
            $table->integer('doc_collection_status')->nullable();
            $table->date('doc_submission_date')->nullable();
            $table->date('doc_collection_date')->nullable();
            $table->date('cut_off_date');
            $table->integer('ms_id');
            $table->date('reg_date');
            $table->date('due_date');
            $table->integer('no_of_months');
            $table->integer('has_extension');
            $table->integer('portal_cert_id');
            $table->integer('open_cert_dealer_id');
            $table->integer('is_open_certificate');
            $table->char('verified_manually', 1)->nullable()->default('0');
            $table->integer('verified_by_user_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_open_certificates');
    }
};
