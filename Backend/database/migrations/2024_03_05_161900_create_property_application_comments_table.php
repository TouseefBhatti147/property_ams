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
        Schema::create('property_application_comments', function (Blueprint $table) {
            $table->bigInteger('comment_id', true);
            $table->integer('application_id');
            $table->integer('comment_type')->comment('process management, printing, other');
            $table->string('comments', 1000);
            $table->integer('user_id');
            $table->dateTime('date');
            $table->integer('generated_by');
            $table->string('ip_address', 20);
            $table->integer('parent_id')->nullable()->comment('0: comment, else reply');
            $table->string('location', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_application_comments');
    }
};
