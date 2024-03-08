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
        Schema::create('qridentity_feedbacks', function (Blueprint $table) {
            $table->integer('feedback_id', true);
            $table->integer('feedback_type')->comment('feedback/complain/appreciation');
            $table->dateTime('date_time');
            $table->string('remarks', 1000);
            $table->integer('status');
            $table->integer('member_id');
            $table->string('feedback_by_name', 200);
            $table->string('feedback_by_contact', 100);
            $table->string('feedback_by_email', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qridentity_feedbacks');
    }
};
