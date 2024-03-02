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
        Schema::create('transfer_desk_appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desk_id');
            $table->integer('ms_id')->default(0);
            $table->dateTime('dated');
            $table->string('scheduled_time', 100);
            $table->integer('user_id')->default(0);
            $table->text('remarks')->nullable();
            $table->tinyInteger('status')->default(1)->comment("'1'=>'Scheduled', '2'=>'Expired', '3'=>'Attended', '4'=>'Unattended', '5'=>'Cancelled'");
            $table->timestamps();

            // Indexes
            $table->index('desk_id');
            $table->index('ms_id');
            $table->index('dated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_desk_appointments');
    }
};
