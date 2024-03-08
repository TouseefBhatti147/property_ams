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
        Schema::create('sizewise_variation', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('size_id')->default(0);
            $table->integer('tag_id')->default(0);
            $table->integer('rate')->default(0);
            $table->integer('project_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizewise_variation');
    }
};
