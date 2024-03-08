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
        Schema::create('tracking_returned_bookings', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('tracking_id')->nullable();
            $table->integer('ms_id');
            $table->string('tracking_no');
            $table->integer('step_no')->nullable();
            $table->string('step_department')->nullable();
            $table->integer('return_from_step_no')->nullable();
            $table->string('return_from_department')->nullable();
            $table->integer('returned_by')->nullable();
            $table->string('returned_at', 45)->nullable();
            $table->integer('received_by')->nullable();
            $table->dateTime('received_at')->nullable();
            $table->integer('forwarded_by')->nullable();
            $table->dateTime('forwarded_at')->nullable();
            $table->integer('delay')->nullable();
            $table->text('return_remarks')->nullable();
            $table->text('forward_remarks')->nullable();
            $table->boolean('status')->nullable()->default(true)->comment('1= returned
2= return received
3= return forwarded');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking_returned_bookings');
    }
};
