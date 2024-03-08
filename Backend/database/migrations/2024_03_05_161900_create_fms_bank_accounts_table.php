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
        Schema::create('fms_bank_accounts', function (Blueprint $table) {
            $table->integer('account_id', true);
            $table->integer('bank_id');
            $table->string('account_title', 1000)->nullable();
            $table->string('account_no', 300)->nullable();
            $table->string('iban_no', 300)->nullable();
            $table->integer('allow_in_csc')->default(0);
            $table->integer('allow_in_lsc')->default(0);
            $table->integer('allow_in_cash_slip')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_bank_accounts');
    }
};
