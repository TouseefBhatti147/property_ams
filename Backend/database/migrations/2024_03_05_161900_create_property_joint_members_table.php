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
        Schema::create('property_joint_members', function (Blueprint $table) {
            $table->bigInteger('joint_ms_id', true);
            $table->integer('membership_id');
            $table->integer('plot_id');
            $table->integer('member_id');
            $table->integer('member_status');
            $table->integer('nominee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_joint_members');
    }
};
