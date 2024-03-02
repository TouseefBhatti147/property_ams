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
        Schema::create('transfer_desks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sales_center_id');
            $table->string('title', 255);
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('for_online_member')->default(0);
            $table->timestamps();

            // Indexes
            $table->index('sales_center_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_desks');
    }
};
