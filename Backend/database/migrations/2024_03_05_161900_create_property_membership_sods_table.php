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
        Schema::create('property_membership_sods', function (Blueprint $table) {
            $table->bigInteger('sod_id', true);
            $table->bigInteger('ms_id');
            $table->bigInteger('installment_id');
            $table->integer('verified_by')->nullable()->default(0);
            $table->dateTime('verified_at')->nullable();
            $table->boolean('payment_status')->nullable()->default(true)->comment('1=Unverified
2=Verified');
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('charges_for')->default(0)->comment('1: seller, 2: buyer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_membership_sods');
    }
};
