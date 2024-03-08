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
        Schema::create('fbr_atl_changes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('member_id')->default(0);
            $table->integer('status')->default(0)->comment('new filer/marked as non filer');
            $table->date('reg_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fbr_atl_changes');
    }
};
