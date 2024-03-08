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
        Schema::create('site_incharge_teams', function (Blueprint $table) {
            $table->increments('incharge_team_id')->unique('incharge_team_id_UNIQUE')->comment('ID');
            $table->integer('project_id');
            $table->integer('division_category_id');
            $table->integer('division_id')->comment('Team Location/Division');
            $table->integer('user_id')->comment('Site Team Incharge');
            $table->string('title')->comment('Title');
            $table->string('short')->nullable()->comment('Abbrev.');
            $table->integer('size')->nullable();
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
            $table->boolean('is_active')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('created date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated date');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_incharge_teams');
    }
};
