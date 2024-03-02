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
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('visit_no', 100);
            $table->string('name', 255);
            $table->string('email', 255)->nullable();
            $table->integer('country_id')->default(0);
            $table->string('countrycode', 50)->default('0');
            $table->string('contact_no', 100)->default('0');
            $table->string('contact_no_pak', 100)->default('0');
            $table->string('title', 255)->nullable();
            $table->string('picture', 45)->nullable();
            $table->date('dated')->nullable();
            $table->string('timed', 100)->nullable();
            $table->tinyInteger('site_visit')->default(0);
            $table->tinyInteger('conveyance')->default(0);
            $table->tinyInteger('persons')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
};
