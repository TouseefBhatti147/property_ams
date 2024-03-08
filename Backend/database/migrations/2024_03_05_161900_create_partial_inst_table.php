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
        Schema::create('partial_inst', function (Blueprint $table) {
            $table->bigInteger('inst_id')->primary();
            $table->integer('plot_id')->default(0);
            $table->integer('ref')->default(0);
            $table->decimal('dueamount', 10)->default(0);
            $table->integer('inst_no')->default(0);
            $table->decimal('totaldue', 10)->default(0);
            $table->double('percent_value')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partial_inst');
    }
};
