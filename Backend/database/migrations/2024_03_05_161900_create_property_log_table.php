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
    Schema::create('property_log', function (Blueprint $table) {
        $table->bigIncrements('log_id');
        $table->bigInteger('application_id')->default(0);
        $table->bigInteger('plot_id')->default(0);
        $table->bigInteger('ms_id')->default(0);
        $table->bigInteger('member_id')->default(0);
        $table->bigInteger('voucher_id')->default(0);
        $table->integer('before_id')->default(0);
        $table->bigInteger('before_id2')->default(0);
        $table->string('before_text1', 255)->nullable();
        $table->string('before_text2', 255)->nullable();
        $table->string('before_text3', 255)->nullable();
        $table->string('before_text4', 255)->nullable();
        $table->string('before_text5', 255)->nullable();
        $table->integer('after_id')->default(0);
        $table->bigInteger('after_id2')->default(0);
        $table->string('after_text1', 255)->nullable();
        $table->string('after_text2', 255)->nullable();
        $table->string('after_text3', 255)->nullable();
        $table->string('after_text4', 255)->nullable();
        $table->string('after_text5', 255)->nullable();
        $table->integer('updated_by')->default(0);
        $table->dateTime('updated_on');
        $table->integer('status')->default(0)->comment('action performed');
        $table->integer('verified_by')->default(0);
        $table->integer('verified_by_action_id')->default(0);
        $table->dateTime('verified_on');
        $table->string('remarks', 255)->nullable();
        $table->integer('generated_by')->default(0);
        $table->integer('generated_by_dept')->default(0);
        $table->dateTime('generated_on');
        $table->string('generated_by_remarks', 255)->nullable();
        $table->integer('cancelled_by')->default(0);
        $table->dateTime('cancelled_on');
        $table->string('cancellation_remarks', 255)->nullable();
        $table->integer('req_verified_by')->default(0);
        $table->dateTime('req_verified_on');
        $table->string('req_verification_remarks', 255)->nullable();
        $table->integer('req_verified_by_action_id')->default(0);
        $table->integer('req_approved_by')->default(0);
        $table->dateTime('req_approved_on');
        $table->string('req_approval_remarks', 255)->nullable();
        $table->integer('req_approval_action_id')->default(0);
        $table->integer('audit_by')->nullable()->default(0);
        $table->dateTime('audit_on');
        $table->string('audit_remarks', 255)->nullable();
        $table->integer('audit_action_id')->default(0);
        $table->integer('sec_id')->default(0);
        $table->dateTime('sec_verified_on');
        $table->string('sec_remarks', 255)->nullable();
        $table->integer('sec_action_id')->default(0);
        $table->integer('action_to_perform')->default(0);
        $table->integer('target_dept')->default(0);
        $table->integer('source_type')->default(0)->comment('application/member/membership etc');
        $table->bigInteger('source_id')->default(0);
        $table->integer('category')->default(0);
        $table->bigInteger('property_id')->default(0);
        $table->bigInteger('building_id')->default(0);
        $table->integer('action_type')->default(0);
        $table->integer('activation_status')->default(1);
        $table->string('ref_no', 50)->nullable();
        $table->integer('finance_ver_by')->default(0);
        $table->dateTime('finance_ver_on')->nullable();
        $table->string('finance_ver_remarks', 255)->nullable();
        $table->integer('finance_ver_action_id')->default(0);
        $table->bigInteger('value1')->default(0);
        $table->bigInteger('value2')->default(0);
        $table->dateTime('date1')->nullable();
        $table->dateTime('date2')->nullable();
        $table->dateTime('date3')->nullable();
        $table->bigInteger('value3')->default(0);
        $table->string('text1', 255)->nullable();
        $table->string('text2', 255)->nullable();
        $table->string('text3', 255)->nullable();
        $table->string('text4', 255)->nullable();
        $table->string('text5', 255)->nullable();
        $table->integer('status_under_approval')->default(0)->comment('next action to be performed');
        $table->integer('project_id')->nullable()->default(0);
        $table->tinyInteger('notification')->nullable()->default(0)->comment('1: active, 2: viewed by user');
        $table->text('edit_request_action')->nullable();
        $table->string('attachment', 50)->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_log');
    }
};
