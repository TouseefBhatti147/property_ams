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
        Schema::create('non_members', function (Blueprint $table) {
            $table->bigInteger('person_id', true);
            $table->integer('project_id')->default(1);
            $table->string('person_name');
            $table->string('email');
            $table->string('country')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('countrycode')->nullable();
            $table->string('contact_no', 100);
            $table->dateTime('reg_date')->nullable()->useCurrent();
            $table->string('form_type')->nullable()->default('plot')->comment('[plot, villa]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_members');
    }
};
