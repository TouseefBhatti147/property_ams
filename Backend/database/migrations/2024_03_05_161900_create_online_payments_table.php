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
        Schema::create('online_payments', function (Blueprint $table) {
            $table->bigInteger('payment_id', true);
            $table->integer('payment_type');
            $table->integer('against_type');
            $table->string('ref_no', 200);
            $table->string('name', 1000);
            $table->string('address', 3000);
            $table->string('city', 100);
            $table->string('country', 100);
            $table->string('contact', 200);
            $table->string('email', 200);
            $table->string('cnic', 50);
            $table->string('passport_no', 100)->nullable();
            $table->decimal('amount', 10, 0);
            $table->decimal('bal', 10, 0)->nullable();
            $table->decimal('charges', 10, 4)->nullable();
            $table->string('remarks', 3000)->nullable();
            $table->string('trans_no')->nullable();
            $table->date('trans_date')->nullable();
            $table->integer('sys_trans_id')->default(0)->index('sys_trans_id');
            $table->integer('status')->nullable()->default(0);
            $table->string('finance_ver_remarks', 1000)->nullable();
            $table->integer('verified_by')->nullable()->default(0);
            $table->integer('verification_date')->nullable();
            $table->integer('process_status')->nullable();
            $table->integer('voucher_status')->nullable()->default(0);
            $table->integer('project')->nullable()->default(0);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('merchant_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_payments');
    }
};
