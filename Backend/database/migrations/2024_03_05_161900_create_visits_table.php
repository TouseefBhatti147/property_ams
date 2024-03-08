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
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('visit_no', 100);
            $table->string('name');
            $table->string('email')->nullable();
            $table->integer('country_id')->nullable()->default(0);
            $table->string('countrycode', 50)->nullable()->default('0');
            $table->string('contact_no', 100)->nullable()->default('0');
            $table->string('contact_no_pak', 100)->nullable()->default('0');
            $table->string('title')->nullable();
            $table->string('picture', 45)->nullable();
            $table->date('dated')->nullable();
            $table->string('timed', 100)->nullable();
            $table->boolean('site_visit')->nullable()->default(false);
            $table->boolean('conveyance')->nullable()->default(false);
            $table->tinyInteger('persons')->nullable()->default(1);
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
        Schema::dropIfExists('visits');
    }
};
