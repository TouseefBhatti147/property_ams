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
        Schema::create('members_dealer_groups', function (Blueprint $table) {
            $table->integer('group_id', true);
            $table->string('group_title', 500);
            $table->integer('default_dealer')->nullable();
            $table->integer('group_for');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_dealer_groups');
    }
};
