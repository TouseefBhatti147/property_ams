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
        Schema::create('property_membership_vouchers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ms_id')->default(0);
            $table->integer('voucher_id')->default(0)->comment('normal voucher, tax voucher');
            $table->integer('voucher_type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_membership_vouchers');
    }
};
