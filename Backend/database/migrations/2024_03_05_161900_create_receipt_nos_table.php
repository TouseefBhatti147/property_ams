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
        Schema::create('receipt_nos', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('project_id');
            $table->integer('receipt_no');
            $table->bigInteger('voucher_id')->default(0)->comment('1: available, 2: reserved');
            $table->dateTime('created_on')->useCurrent();
            $table->dateTime('updated_on')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipt_nos');
    }
};
