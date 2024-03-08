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
        Schema::create('property_membership_refund', function (Blueprint $table) {
            $table->integer('refund_id', true);
            $table->bigInteger('ms_id');
            $table->string('instrument_no', 100)->nullable();
            $table->date('instrument_date')->nullable();
            $table->decimal('instrument_amount', 10, 0)->default(0);
            $table->integer('status')->default(0)->comment('pending, paid');
            $table->string('attachment', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_membership_refund');
    }
};
