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
        Schema::create('plot_tags', function (Blueprint $table) {
            $table->integer('plot_tag_id', true);
            $table->integer('plot_id');
            $table->integer('tag1_id');
            $table->integer('tag1_user');
            $table->string('tag1_comments', 1000);
            $table->dateTime('tag1_date');
            $table->integer('tag2_id');
            $table->string('tag2_comments', 1000);
            $table->integer('tag2_user');
            $table->dateTime('tag2_date');
            $table->integer('tag3_id');
            $table->integer('tag3_user');
            $table->string('tag3_comments', 1000);
            $table->dateTime('tag3_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plot_tags');
    }
};
