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
        Schema::create('fms_accounts', function (Blueprint $table) {
            $table->integer('acc_id', true);
            $table->integer('category_id')->default(0);
            $table->string('acc_code', 10)->nullable();
            $table->string('acc_title', 300)->nullable();
            $table->string('remarks', 500)->nullable();
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_accounts');
    }
};
