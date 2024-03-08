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
        Schema::create('property_online_payments', function (Blueprint $table) {
            $table->integer('transaction_id', true);
            $table->string('response_code')->nullable();
            $table->text('response_description')->nullable();
            $table->double('bal')->nullable();
            $table->double('amount')->nullable();
            $table->string('approval_code')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_num')->nullable();
            $table->string('card_token')->nullable();
            $table->double('fees')->nullable();
            $table->integer('valid')->nullable();
            $table->dateTime('trans_date')->nullable();
            $table->string('payment_type', 225)->nullable();
            $table->string('cnic', 225)->nullable();
            $table->string('applicationid', 225)->nullable();
            $table->string('ip_address', 225)->nullable();
            $table->string('finance_ver_remarks', 1000)->nullable();
            $table->integer('verified_by')->nullable();
            $table->dateTime('verification_date')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('project_id')->nullable()->default(0);
            $table->text('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_online_payments');
    }
};
