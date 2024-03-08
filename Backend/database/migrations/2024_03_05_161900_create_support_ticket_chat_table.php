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
        Schema::create('support_ticket_chat', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('ticket_id')->nullable();
            $table->integer('member_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->longText('message')->nullable();
            $table->boolean('read')->nullable()->default(false);
            $table->boolean('user_read')->nullable()->default(false);
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
        Schema::dropIfExists('support_ticket_chat');
    }
};
