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
        Schema::create('size_cat_accconfig', function (Blueprint $table) {
            $table->integer('config_id', true);
            $table->integer('size_id')->default(0);
            $table->integer('project_id')->default(0);
            $table->string('acc_code', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_cat_accconfig');
    }
};
