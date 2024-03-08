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
        Schema::create('site_divisions', function (Blueprint $table) {
            $table->increments('division_id')->comment('ID');
            $table->integer('division_category_id')->comment('Division/Location Category');
            $table->integer('project_id')->comment('Project');
            $table->string('title')->comment('Title');
            $table->string('short')->nullable()->comment('Abbrev.');
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
            $table->boolean('is_active')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');

            $table->unique(['division_id'], 'site_division_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_divisions');
    }
};
