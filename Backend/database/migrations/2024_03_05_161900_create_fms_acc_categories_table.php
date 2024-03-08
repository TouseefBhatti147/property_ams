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
        Schema::create('fms_acc_categories', function (Blueprint $table) {
            $table->integer('category_id', true);
            $table->integer('head_id')->default(0);
            $table->string('category_code', 30)->nullable();
            $table->string('category_title', 300)->nullable();
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
        Schema::dropIfExists('fms_acc_categories');
    }
};
