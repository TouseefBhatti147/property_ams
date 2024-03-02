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
        Schema::create('town_planning_updates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->integer('tag1_id')->default(0);
            $table->date('progress_upto_date');
            $table->string('image', 255);
            $table->longText('description')->nullable();
            $table->longText('comments')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_new')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('town_planning_updates');
    }
};
