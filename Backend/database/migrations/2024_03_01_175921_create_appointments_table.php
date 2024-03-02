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
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('appointment_id');
            $table->integer('by_dealer_id')->nullable()->default(0);
            $table->integer('by_user_id')->nullable()->default(0);
            $table->date('date');
            $table->string('time_from', 10);
            $table->string('time_to', 10);
            $table->integer('type');
            $table->integer('to_meet_user_id')->nullable();
            $table->integer('status')->default(1);
            $table->integer('no_of_guests')->nullable();
            $table->longText('agenda')->nullable();
            $table->string('attendance_time_in', 10)->nullable();
            $table->string('attendance_time_out', 10)->nullable();
            $table->integer('presenter_user_id')->nullable();
            $table->longText('comments')->nullable();
            $table->timestamps();
            $table->index('to_meet_user_id');
            $table->index('presenter_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
