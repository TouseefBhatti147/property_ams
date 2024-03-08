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
        Schema::create('installpayment_attributes', function (Blueprint $table) {
            $table->bigInteger('attribute_id', true);
            $table->integer('installpayment_id')->nullable()->default(0);
            $table->integer('attribute_type')->nullable()->default(0)->comment('advance/special');
            $table->bigInteger('value')->nullable()->default(0);
            $table->integer('tag')->nullable()->default(0);
            $table->bigInteger('ref_id')->nullable()->default(0)->comment('log id');
            $table->dateTime('reg_date')->nullable();
            $table->integer('reg_by')->nullable()->default(0);
            $table->text('reg_remarks')->nullable();
            $table->dateTime('print_date')->nullable();
            $table->integer('printed_by')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installpayment_attributes');
    }
};
