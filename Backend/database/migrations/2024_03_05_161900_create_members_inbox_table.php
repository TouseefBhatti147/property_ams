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
        Schema::create('members_inbox', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('member_id');
            $table->string('subject')->nullable();
            $table->longText('message');
            $table->boolean('read')->nullable()->default(false);
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('N');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_inbox');
    }
};
