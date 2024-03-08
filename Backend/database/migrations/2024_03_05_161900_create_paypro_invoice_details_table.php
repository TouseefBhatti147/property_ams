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
        Schema::create('paypro_invoice_details', function (Blueprint $table) {
            $table->bigInteger('invoice_detail_id', true);
            $table->bigInteger('invoice_id')->default(0);
            $table->bigInteger('ref_id')->default(0)->comment('installpayment.id');
            $table->string('title', 500)->nullable();
            $table->date('due_date')->nullable();
            $table->decimal('amount', 10, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paypro_invoice_details');
    }
};
