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
        Schema::create('online_payments_general', function (Blueprint $table) {
            $table->bigInteger('payment_id', true);
            $table->integer('payment_type')->nullable();
            $table->integer('against_type')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('name')->nullable();
            $table->string('address', 1000)->nullable();
            $table->string('city', 225)->nullable();
            $table->integer('country_id')->nullable();
            $table->string('contact', 225)->nullable();
            $table->string('email', 225)->nullable();
            $table->string('cnic', 100)->nullable();
            $table->string('passport_no', 100)->nullable();
            $table->decimal('amount', 10, 0)->nullable();
            $table->decimal('bal', 10, 0)->nullable();
            $table->decimal('charges', 10, 4)->nullable();
            $table->string('remarks', 1000)->nullable();
            $table->string('trans_no')->nullable()->comment('UBL transaction number');
            $table->dateTime('trans_date')->nullable();
            $table->integer('sys_trans_id')->nullable()->default(0)->comment('transaction_id from property_online_payment');
            $table->integer('status')->nullable()->default(0);
            $table->string('finance_ver_remarks', 1000)->nullable();
            $table->integer('verified_by')->nullable()->default(0);
            $table->integer('verification_date')->nullable();
            $table->integer('process_status')->nullable();
            $table->integer('voucher_status')->nullable()->default(0);
            $table->integer('project_id')->nullable()->default(0);
            $table->string('response_code')->nullable();
            $table->string('response_description', 1000)->nullable();
            $table->string('approval_code')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_num')->nullable();
            $table->string('card_token')->nullable();
            $table->double('fees')->nullable();
            $table->integer('valid')->nullable();
            $table->string('payment_type_label', 225)->nullable();
            $table->string('applicationid')->nullable();
            $table->string('ip_address', 225)->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_payments_general');
    }
};
