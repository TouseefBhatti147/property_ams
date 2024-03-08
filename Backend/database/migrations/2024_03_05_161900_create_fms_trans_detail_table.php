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
        Schema::create('fms_trans_detail', function (Blueprint $table) {
            $table->integer('detail_id', true);
            $table->integer('trans_id')->default(0);
            $table->integer('acc_id')->default(0);
            $table->double('dr_amount')->default(0);
            $table->double('cr_amount')->default(0);
            $table->string('remarks', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_trans_detail');
    }
};
