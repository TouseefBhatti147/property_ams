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
        Schema::create('balloting_sizes', function (Blueprint $table) {
            $table->integer('balloting_size_id', true);
            $table->integer('balloting_id');
            $table->integer('size_id')->default(0);
            $table->decimal('payment_percent', 10, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_sizes');
    }
};
