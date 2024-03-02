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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('nicename')->nullable();
            $table->string('iso3')->nullable();
            $table->integer('calling_code')->nullable();
            $table->integer('position')->nullable();
            $table->string('flag')->nullable();
            $table->string('iso')->nullable();
            $table->string('phone_code');
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('sms_status')->default(1);
            $table->tinyInteger('is_dispatchable')->default(0);
            $table->unsignedBigInteger('old_id')->nullable();
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
        Schema::dropIfExists('countries');
    }
};
