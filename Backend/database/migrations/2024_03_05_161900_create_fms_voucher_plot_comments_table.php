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
        Schema::create('fms_voucher_plot_comments', function (Blueprint $table) {
            $table->bigInteger('comment_id', true);
            $table->integer('voucher_plot_id');
            $table->integer('comment_type')->nullable()->comment('process management, printing, other');
            $table->string('comments', 1000)->nullable();
            $table->integer('user_id')->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('generated_by')->nullable();
            $table->string('ip_address', 20)->nullable();
            $table->integer('parent_id')->nullable()->comment('0: comment, else reply');
            $table->string('location', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_voucher_plot_comments');
    }
};
