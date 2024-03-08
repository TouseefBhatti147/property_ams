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
        Schema::create('ms_fbr_rates', function (Blueprint $table) {
            $table->bigInteger('ms_rate_id', true);
            $table->integer('plot_id')->default(0);
            $table->integer('ms_id')->default(0);
            $table->date('reg_date')->nullable();
            $table->decimal('fbr_rate', 10)->default(0);
            $table->decimal('rate_percent', 10)->default(0);
            $table->decimal('fbr_plot_value', 10)->default(0);
            $table->decimal('due_tax', 10)->default(0);
            $table->decimal('cum_paid', 10)->default(0);
            $table->decimal('running_due', 10)->default(0);
            $table->decimal('paid_tax', 10)->default(0);
            $table->integer('status')->default(0);
            $table->string('remarks', 1000)->nullable();
            $table->integer('source')->default(0);
            $table->integer('created_by')->default(0);
            $table->dateTime('created_on')->nullable();
            $table->integer('updated_by')->default(0);
            $table->dateTime('updated_on')->nullable();
            $table->integer('member_id')->default(0);
            $table->bigInteger('parent_id')->default(0);
            $table->double('balance_percent')->default(0);
            $table->integer('calculation_mode')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_fbr_rates');
    }
};
