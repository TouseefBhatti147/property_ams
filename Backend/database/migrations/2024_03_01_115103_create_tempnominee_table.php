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
        Schema::create('tempnominee', function (Blueprint $table) {
            $table->bigIncrements('record_id');
            $table->unsignedBigInteger('nominee_id');
            $table->unsignedBigInteger('parent_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('nominee_id')->references('id')->on('nominees')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempnominee');
    }
};
