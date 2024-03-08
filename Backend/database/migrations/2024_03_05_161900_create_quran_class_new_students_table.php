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
        Schema::create('quran_class_new_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable()->default(1);
            $table->integer('country_id');
            $table->integer('males')->nullable()->default(0);
            $table->integer('females')->nullable()->default(0);
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quran_class_new_students');
    }
};
