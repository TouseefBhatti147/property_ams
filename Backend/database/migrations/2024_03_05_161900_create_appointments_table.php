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
            $table->integer('type')->comment('[1=> Visual Gallery
              2=> management
            ]');
            $table->integer('to_meet_user_id')->nullable()->comment('appointment with management user id');
            $table->integer('status')->default(1)->comment('1: Pending
              2: Scheduled
              3: Postponed
              4: Cancelled
              5: Completed
              6: Other
            ');
            $table->integer('no_of_guests');
            $table->longText('agenda')->nullable();
            $table->string('attendance_time_in', 10)->nullable();
            $table->string('attendance_time_out', 10)->nullable();
            $table->integer('presenter_user_id')->nullable();
            $table->longText('comments')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->timestamps(); // Add timestamps

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
