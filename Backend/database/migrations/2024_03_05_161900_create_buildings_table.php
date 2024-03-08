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
        Schema::create('buildings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('building_type_id')->nullable()->default(0);
            $table->string('name');
            $table->integer('parking')->nullable()->default(0)->comment('[0=> Indoor 1=> Outdoor]	');
            $table->integer('project_id');
            $table->integer('status');
            $table->string('building_image')->nullable();
            $table->integer('sft_rate')->default(0);
            $table->string('building_code', 10)->nullable();
            $table->decimal('open_parking_percent', 10)->default(0);
            $table->decimal('covered_parking_percent', 10)->default(0);
            $table->integer('is_associate')->default(0);
            $table->integer('old_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
};
