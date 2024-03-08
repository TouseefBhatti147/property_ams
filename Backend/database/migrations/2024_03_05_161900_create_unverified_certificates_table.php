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
        Schema::create('unverified_certificates', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('user_id');
            $table->string('qrcode');
            $table->text('comments')->nullable();
            $table->string('status')->default('Open')->comment('[ \'Open\', \'On Hold\', \'Closed\']');
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
        Schema::dropIfExists('unverified_certificates');
    }
};
