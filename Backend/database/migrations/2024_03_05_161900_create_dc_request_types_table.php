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
        Schema::create('dc_request_types', function (Blueprint $table) {
            $table->integer('request_type_id', true);
            $table->integer('group_id');
            $table->string('title', 1000);
            $table->integer('screen_id');
            $table->string('remarks', 2000);
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dc_request_types');
    }
};
