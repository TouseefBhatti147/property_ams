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
        Schema::create('tax_rates', function (Blueprint $table) {
            $table->integer('tax_id', true);
            $table->integer('project_id')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('rate_for')->default(0)->comment('from charges');
            $table->text('remarks')->nullable();
            $table->integer('status')->default(0);
            $table->text('ref_no')->nullable();
            $table->integer('adjustment_type')->default(0)->comment('on installments, lumpsum amount');
            $table->integer('application_method')->default(0)->comment('one time, on each transfer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_rates');
    }
};
