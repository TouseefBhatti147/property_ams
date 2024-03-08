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
        Schema::create('installments_grouped', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('id_UNIQUE');
            $table->integer('plot_id')->nullable();
            $table->integer('installment_no')->nullable();
            $table->boolean('is_partial')->nullable()->default(false);
            $table->boolean('paid_full')->nullable()->default(false);
            $table->boolean('paid_partial')->nullable()->default(false);
            $table->bigInteger('dueamount')->nullable()->default(0);
            $table->bigInteger('paidamount')->nullable()->default(0);
            $table->integer('paid_partial_per')->nullable()->default(0);
            $table->date('due_date')->nullable();
            $table->date('paid_date')->nullable();
            $table->integer('delay_days')->nullable()->default(0);
            $table->boolean('delay')->nullable()->default(false);

       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installments_grouped');
    }
};
