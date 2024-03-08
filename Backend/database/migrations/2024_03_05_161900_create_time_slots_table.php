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
        Schema::create('time_slots', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('slot', 100);
            $table->boolean('status')->default(true);
            $table->boolean('for_site')->nullable()->default(true);
            $table->boolean('is_working_hour')->nullable()->default(false);
            $table->boolean('for_transfer')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_slots');
    }
};
