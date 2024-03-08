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
        Schema::create('sec_related_actions', function (Blueprint $table) {
            $table->integer('ra_id', true);
            $table->integer('action_id')->default(0);
            $table->integer('related_action_id')->default(0);
            $table->integer('sort_order')->default(0);
            $table->integer('status')->default(1);
            $table->string('validation_action', 1000)->nullable();
            $table->string('approval_action', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_related_actions');
    }
};
