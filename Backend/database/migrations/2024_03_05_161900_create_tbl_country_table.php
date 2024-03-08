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
        Schema::create('tbl_country', function (Blueprint $table) {
            $table->integer('id', true)->unique('id');
            $table->string('country');
            $table->string('nicename')->nullable();
            $table->string('iso3', 3)->nullable();
            $table->integer('calling_code')->nullable();
            $table->integer('position')->nullable();
            $table->string('flag')->nullable();
            $table->string('iso', 3)->nullable();
            $table->string('phone_code');
            $table->integer('is_active')->default(1);
            $table->integer('sms_status')->default(1);
            $table->boolean('is_dispatchable')->nullable()->default(false);
            $table->integer('old_id')->nullable();

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_country');
    }
};
