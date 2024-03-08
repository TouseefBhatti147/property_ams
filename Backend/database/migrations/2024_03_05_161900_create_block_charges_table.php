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
        Schema::create('block_charges', function (Blueprint $table) {
            $table->integer('block_charges_id', true);
            $table->integer('block_id')->default(0);
            $table->integer('size_id')->default(0);
            $table->integer('plan_id')->default(0);
            $table->decimal('unsold_pl_charges', 10)->default(0);
            $table->decimal('unsold_dev_charges', 10)->default(0);
            $table->decimal('current_dev_charges', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_charges');
    }
};
