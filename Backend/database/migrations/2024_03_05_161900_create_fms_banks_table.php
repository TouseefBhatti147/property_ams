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
        Schema::create('fms_banks', function (Blueprint $table) {
            $table->integer('bank_id', true);
            $table->string('bank_title', 300);
            $table->integer('allow_in_portal')->nullable()->default(0);
            $table->integer('allow_for_deposit')->nullable()->default(1);
            $table->string('complete_title', 500)->nullable();
            $table->string('account_title', 300)->nullable();
            $table->string('bank_name', 300)->nullable();
            $table->string('account_no', 100)->nullable();
            $table->integer('allow_in_lsc')->nullable()->default(0);
            $table->integer('allow_in_csc')->nullable()->default(0);
            $table->integer('allow_in_instruments')->nullable()->default(0);
            $table->integer('allow_in_cash_slip')->nullable()->default(0);
            $table->integer('allow_in_internal_challan')->nullable()->default(0);
            $table->integer('allow_in_external_challan')->nullable()->default(0);
            $table->integer('allow_in_ubl_gateway')->nullable()->default(0);
            $table->integer('allow_in_paypro')->nullable()->default(0);
            $table->integer('status')->nullable()->default(1);
            $table->string('challan_title')->nullable();
            $table->boolean('for_csc_tickets')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_banks');
    }
};
