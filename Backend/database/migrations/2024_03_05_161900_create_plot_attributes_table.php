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
        Schema::create('plot_attributes', function (Blueprint $table) {
            $table->bigInteger('attribute_id', true);
            $table->integer('plot_id')->nullable()->default(0)->index('plot_id');
            $table->integer('attribute_type')->nullable()->default(0)->index('attribute_type')->comment('installment plan/allocation/ack slip');
            $table->bigInteger('value')->nullable()->default(0);
            $table->integer('tag')->nullable()->default(0);
            $table->bigInteger('ref_id')->nullable()->default(0)->comment('ack slip/allocation id');
            $table->dateTime('reg_date')->nullable();
            $table->integer('reg_by')->nullable()->default(0);
            $table->text('reg_remarks')->nullable();
            $table->dateTime('print_date')->nullable();
            $table->integer('printed_by')->nullable()->default(0);
            $table->bigInteger('value2')->default(0);
            $table->decimal('decimal_val1', 10)->default(0);
            $table->decimal('decimal_val2', 10)->default(0);
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
            $table->date('date1')->nullable();
            $table->date('date2')->nullable();
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plot_attributes');
    }
};
