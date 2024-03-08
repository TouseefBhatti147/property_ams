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
        Schema::create('open_file_trading', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('trader_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->string('ms_no', 100)->nullable();
            $table->bigInteger('seller_cnic')->nullable();
            $table->string('open_result')->nullable();
            $table->date('open_expiry')->nullable();
            $table->dateTime('verified_at')->nullable();
            $table->tinyInteger('verify_attempts')->nullable()->default(1);
            $table->boolean('for_trading')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('open_file_trading');
    }
};
