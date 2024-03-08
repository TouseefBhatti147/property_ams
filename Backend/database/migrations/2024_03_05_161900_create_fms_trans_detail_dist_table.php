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
        Schema::create('fms_trans_detail_dist', function (Blueprint $table) {
            $table->bigInteger('distribution_id', true);
            $table->integer('trans_id')->default(0);
            $table->string('distributed_to_type', 200)->nullable()->comment('member, ...');
            $table->integer('distributed_to_id')->default(0)->comment('member_id, ...');
            $table->double('dr_amount')->default(0);
            $table->double('cr_amount')->default(0);
            $table->string('remarks', 1000)->nullable();
            $table->integer('bank_id')->nullable();
            $table->date('bank_trans_date')->nullable();
            $table->string('bank_trans_no', 200)->nullable();
            $table->integer('against')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_trans_detail_dist');
    }
};
