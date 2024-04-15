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
        Schema::create('balloting_ack_slip_quota', function (Blueprint $table) {
            $table->integer('quota_id', true);
            $table->integer('size_id')->default(0);
            $table->integer('tag_id')->default(0);
            $table->integer('project_id')->default(0);
            $table->integer('slips_allowed')->default(0);
            $table->integer('balloting_id')->default(0);
            $table->integer('special_qty')->default(0);
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
        Schema::dropIfExists('balloting_ack_slip_quota');
    }
};
