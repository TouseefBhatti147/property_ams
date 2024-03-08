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
        Schema::create('sales_center', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('image');
            $table->string('detail', 500);
            $table->integer('user_id');
            $table->integer('is_online');
            $table->string('display_name')->nullable();
            $table->integer('ordering')->nullable()->default(1);
            $table->integer('associate_company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_center');
    }
};
