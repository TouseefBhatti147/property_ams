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
        Schema::create('paypro_invoices', function (Blueprint $table) {
            $table->bigInteger('invoice_id', true);
            $table->integer('invoice_source')->default(0)->comment('1: installpayment');
            $table->integer('project_id')->default(0);
            $table->integer('generated_by_type')->comment('1: user, 2: member');
            $table->bigInteger('generated_by_id')->comment('user_id, member_id');
            $table->integer('generated_from')->default(0)->comment('ams, member portal, android, ios');
            $table->date('due_date')->nullable();
            $table->date('issue_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->dateTime('created_on')->nullable();
            $table->decimal('amount', 10, 0)->nullable();
            $table->bigInteger('member_id')->default(0);
            $table->string('member_name', 300)->nullable();
            $table->string('member_cnic', 15)->nullable();
            $table->string('member_email', 200)->nullable();
            $table->string('member_contact', 50)->nullable();
            $table->string('member_address', 1000)->nullable();
            $table->bigInteger('ms_id')->default(0);
            $table->string('ms_ref', 200)->nullable();
            $table->string('ms_category', 100)->nullable();
            $table->string('payable_against', 500)->nullable();
            $table->string('amount_in_words', 1000)->nullable();
            $table->decimal('service_charges', 10, 0)->default(0);
            $table->integer('slab_id')->default(0);
            $table->string('paypro_id', 50)->nullable();
            $table->string('paypro_status', 5)->nullable();
            $table->integer('invoice_status')->default(0)->comment('1-100: pending statuses, 101-200: submitted statuses, 201-300: cancelled/inactive statuses');
            $table->dateTime('payment_date')->nullable();
            $table->integer('verified_by')->default(0);
            $table->dateTime('verified_on')->nullable();
            $table->string('verification_remarks', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paypro_invoices');
    }
};
