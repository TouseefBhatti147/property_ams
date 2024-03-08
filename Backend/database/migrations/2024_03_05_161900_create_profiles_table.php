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
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('person_code', 100);
            $table->string('person_name', 500);
            $table->string('middelname', 256);
            $table->string('lastname', 256);
            $table->string('pic', 100);
            $table->string('sodowo', 256);
            $table->string('cnic', 256);
            $table->string('address', 2000)->nullable();
            $table->string('city', 256);
            $table->string('email', 256);
            $table->string('state', 256);
            $table->string('zip', 256);
            $table->string('country', 256);
            $table->string('mobile', 200);
            $table->string('username', 128);
            $table->string('status', 128);
            $table->string('user_id', 128);
            $table->string('create_date', 128);
            $table->string('modify_date', 128);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
