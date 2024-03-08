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
        Schema::create('user_acc_comments', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('user_id');
            $table->boolean('type')->nullable()->default(true)->comment('1=system comments
2= user comments');
            $table->text('comments');
            $table->integer('action_by')->nullable()->default(0);
            $table->dateTime('created_at')->nullable()->useCurrent();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_acc_comments');
    }
};
