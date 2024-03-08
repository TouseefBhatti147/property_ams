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
        Schema::create('events', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 500);
            $table->string('alias');
            $table->string('subtitle', 1000)->nullable();
            $table->string('description', 2000)->nullable();
            $table->longText('details')->nullable();
            $table->date('event_date');
            $table->string('event_time', 50)->nullable();
            $table->integer('status');
            $table->string('venue')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('map_location', 1000)->nullable();
            $table->string('footer_text', 1000)->nullable();
            $table->string('projects', 100)->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('no_of_hours')->nullable();
            $table->string('hours_desc')->nullable();
            $table->integer('no_of_speakers')->nullable();
            $table->string('speakers_desc')->nullable();
            $table->integer('no_of_topics')->nullable();
            $table->string('topics_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
