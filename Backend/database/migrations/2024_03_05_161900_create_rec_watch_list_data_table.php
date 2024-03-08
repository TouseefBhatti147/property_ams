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
        Schema::create('rec_watch_list_data', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('watch_list_cat_id');
            $table->integer('watch_list_id');
            $table->integer('member_id')->nullable();
            $table->integer('plot_id')->nullable();
            $table->string('price')->nullable();
            $table->string('due_amount')->nullable();
            $table->string('paid_amount')->nullable()->default('0');
            $table->string('paid_amount_rejected')->nullable()->default('0');
            $table->string('booking_date')->nullable();
            $table->string('last_payment_date')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('recovery_flag')->nullable()->default(1)->comment('[ 1=Normal Delay, 2=High Delay, 3=Warning, 4=Critical ] ');
            $table->text('user_comments')->nullable();
            $table->integer('ms_id')->nullable();
            $table->string('last_payment_amount')->nullable();
            $table->integer('followup_status')->default(1);
            $table->integer('discount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rec_watch_list_data');
    }
};
