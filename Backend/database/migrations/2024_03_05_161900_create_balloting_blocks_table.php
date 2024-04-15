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
        Schema::create('balloting_blocks', function (Blueprint $table) {
            $table->integer('detail_id', true);
            $table->integer('balloting_id');
            $table->integer('block_id');
            $table->string('master_plan', 100)->nullable();
            $table->string('key_plan', 100)->nullable();
            $table->text('master_plan_thumb')->nullable();
            $table->timestamps(); // Add timestamps

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_blocks');
    }
};
