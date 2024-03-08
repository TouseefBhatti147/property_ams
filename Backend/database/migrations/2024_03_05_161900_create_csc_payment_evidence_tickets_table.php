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
    Schema::create('csc_payment_evidence_tickets', function (Blueprint $table) {
        $table->increments('evidence_ticket_id')->comment('Evidence ID');
        $table->integer('member_id')->index('idx_member_id')->comment('Member');
        $table->string('ticket_no')->index('idx_ticket_no')->comment('Evidence Ticket No.');
        $table->integer('project_id')->comment('Project');
        $table->integer('amount_type')->nullable()->comment('Amount Type');
        $table->date('payment_date')->nullable()->comment('Payment Date');
        $table->date('instrument_receive_date')->nullable();
        $table->integer('amount')->nullable()->comment('Amount');
        $table->integer('sender_bank_id')->nullable()->comment('Sender Bank Name');
        $table->integer('sender_account_no')->nullable()->comment('Sender Account No.');
        $table->integer('receiver_bank_id')->nullable()->index('idx_receiver_bank_id')->comment('Receiver Bank Name');
        $table->integer('receiver_account_no')->nullable()->comment('Receiver Account No.');
        $table->integer('source_id')->comment('Source');
        $table->string('subject')->comment('Subject');
        $table->string('description', 1000)->nullable()->comment('Description');
        $table->string('ref_no')->index('idx_ref_no');
        $table->string('ms_no')->index('idx_ms_no');
        $table->boolean('deposited_by')->nullable()->default(true)->comment('1= self
2= other');
        $table->string('depositor_name')->nullable();
        $table->string('depositor_cnic', 100)->nullable();
        $table->string('depositor_contact_no', 100)->nullable();
        $table->string('attachment_1')->nullable();
        $table->string('attachment_2')->nullable();
        $table->string('attachment_3')->nullable();
        $table->string('attachment_1_ref', 100)->nullable();
        $table->string('attachment_2_ref', 100)->nullable();
        $table->string('attachment_3_ref', 100)->nullable();
        $table->integer('created_by')->nullable()->index('idx_created_by')->comment('Created By');
        $table->integer('submitted_by')->nullable()->comment('CSC Submitted By');
        $table->dateTime('submitted_at')->nullable()->comment('CSC Submitted Date');
        $table->integer('finance_verified_by')->nullable()->comment('Finance Verified By');
        $table->dateTime('finance_verified_at')->nullable()->comment('Finance Verified Date');
        $table->integer('instrument_created_by')->nullable()->comment('Resolved By');
        $table->dateTime('instrument_created_at')->nullable()->comment('Resolved date');
        $table->integer('verified_by')->nullable()->comment('CSC Verified By');
        $table->dateTime('verified_at')->nullable()->comment('CSC Verified Date');
        $table->integer('closed_by')->nullable()->comment('Closed By');
        $table->dateTime('closed_at')->nullable()->comment('Closed Date');
        $table->integer('on_hold_by')->nullable();
        $table->dateTime('on_hold_at')->nullable();
        $table->integer('sales_user_id')->nullable();
        $table->dateTime('sales_assigned_at')->nullable();
        $table->integer('payment_evidence_id')->nullable();
        $table->boolean('is_duplicate')->nullable()->comment('1= Possible Duplicate
2= Is Duplicate');
        $table->string('duplicate_of')->nullable();
        $table->boolean('printed_after_posting')->nullable()->default(false);
        $table->integer('status')->nullable()->default(1)->comment('Status');
        $table->integer('last_status')->nullable();
        $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
        $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');

        // No need to specify primary key constraint separately, as increments() already sets it as primary key
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_payment_evidence_tickets');
    }
};
