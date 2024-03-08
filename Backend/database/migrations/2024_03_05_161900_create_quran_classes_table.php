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
        Schema::create('quran_classes', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('category_id')->default(1);
            $table->integer('station_id');
            $table->integer('teacher_id');
            $table->integer('country_id');
            $table->integer('males')->nullable()->default(0);
            $table->integer('females')->nullable()->default(0);
            $table->boolean('status')->nullable()->default(true);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();

         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quran_classes');
    }
};
