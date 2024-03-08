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
        Schema::create('site_division_categories', function (Blueprint $table) {
            $table->increments('division_category_id')->comment('ID');
            $table->integer('project_id')->comment('Project');
            $table->string('title')->comment('Title');
            $table->string('short')->nullable()->comment('Abbrev.');
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
            $table->boolean('is_active')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated date');

            $table->unique(['division_category_id'], 'site_division_category_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_division_categories');
    }
};
