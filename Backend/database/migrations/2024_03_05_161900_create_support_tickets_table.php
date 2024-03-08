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
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('ticket_no');
            $table->integer('department_id');
            $table->integer('member_id');
            $table->string('subject');
            $table->longText('message')->nullable();
            $table->boolean('status')->default(true)->comment('[ 1= Pending , 2=In Process , 3=Resolved , 4=closed]');
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
        Schema::dropIfExists('support_tickets');
    }
};
