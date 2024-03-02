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
            $table->bigIncrements('id');
            $table->string('ticket_no');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('member_id');
            $table->string('subject');
            $table->longText('message')->nullable();
            $table->tinyInteger('status')->default(1)->comment('[1=Pending, 2=In Process, 3=Resolved, 4=Closed]');
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
        Schema::dropIfExists('support_tickets');
    }
};
