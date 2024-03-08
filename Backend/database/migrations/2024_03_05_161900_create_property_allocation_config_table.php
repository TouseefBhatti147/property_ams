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
        Schema::create('property_allocation_config', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('project_id')->default(0);
            $table->integer('tag_id')->default(0);
            $table->integer('size_id')->default(0);
            $table->integer('balloting_id')->default(0);
            $table->integer('allocate_on')->default(0)->comment('full payment/ dues clear/ after specific %');
            $table->integer('allocate_on_value')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_allocation_config');
    }
};
