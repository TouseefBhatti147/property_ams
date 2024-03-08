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
        Schema::create('echallans', function (Blueprint $table) {
            $table->bigInteger('challan_id', true);
            $table->string('ip_address', 50)->nullable();
            $table->date('date')->nullable();
            $table->integer('type')->nullable();
            $table->bigInteger('member_id')->nullable();
            $table->bigInteger('ms_id')->nullable();
            $table->bigInteger('challan_no')->nullable();
            $table->integer('bank_id')->nullable();
            $table->bigInteger('gen_challan_id')->nullable()->default(0)->index('gen_challan_id');
            $table->integer('user_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('echallans');
    }
};
