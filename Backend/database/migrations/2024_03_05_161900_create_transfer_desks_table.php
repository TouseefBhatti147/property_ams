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
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('sales_center_id');
            $table->string('title');
            $table->boolean('type')->default(true);
            $table->boolean('status')->default(true);
            $table->boolean('for_online_member')->nullable()->default(false);

          
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
