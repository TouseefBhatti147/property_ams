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
        Schema::create('quran_class_teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('name');
            $table->string('pic')->nullable();
            $table->boolean('gender')->nullable()->default(true);
            $table->integer('ordering')->nullable()->default(1);
            $table->dateTime('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quran_class_teachers');
    }
};
