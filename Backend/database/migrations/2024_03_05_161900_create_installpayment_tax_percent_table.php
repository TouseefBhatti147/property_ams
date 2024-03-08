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
        Schema::create('installpayment_tax_percent', function (Blueprint $table) {
            $table->bigInteger('tax_inst_id')->primary();
            $table->bigInteger('inst_id');
            $table->double('tax_percent');
            $table->double('actual_taxable_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installpayment_tax_percent');
    }
};
