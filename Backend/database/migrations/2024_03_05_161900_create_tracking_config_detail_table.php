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
        Schema::create('tracking_config_detail', function (Blueprint $table) {
            $table->integer('detail_id', true);
            $table->integer('tracking_config_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('department_category_id')->nullable()->default(0);
            $table->string('department')->nullable();
            $table->integer('gap');
            $table->integer('step_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking_config_detail');
    }
};
