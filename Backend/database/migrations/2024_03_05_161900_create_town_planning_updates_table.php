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
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('title');
            $table->integer('tag1_id')->default(0);
            $table->date('progress_upto_date');
            $table->string('image');
            $table->longText('description')->nullable();
            $table->longText('comments')->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->boolean('is_new')->nullable()->default(true);
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
        Schema::dropIfExists('town_planning_updates');
    }
};
