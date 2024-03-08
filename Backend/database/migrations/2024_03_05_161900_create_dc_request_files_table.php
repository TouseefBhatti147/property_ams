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
        Schema::create('dc_request_files', function (Blueprint $table) {
            $table->bigInteger('request_file_id', true);
            $table->bigInteger('request_id');
            $table->integer('file_id')->comment('id from plots table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dc_request_files');
    }
};
