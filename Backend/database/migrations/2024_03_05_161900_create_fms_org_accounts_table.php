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
        Schema::create('fms_org_accounts', function (Blueprint $table) {
            $table->integer('acc_id', true);
            $table->string('acc_title', 500);
            $table->integer('acc_type')->comment('1: cash, 2: bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_org_accounts');
    }
};
