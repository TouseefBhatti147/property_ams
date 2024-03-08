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
        Schema::create('fbr_fywise', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('fbr_rate_id')->default(0);
            $table->integer('size_id')->default(0);
            $table->integer('files_reported_to_fbr')->default(0);
            $table->integer('total_active_files')->default(0);
            $table->integer('selected_files')->default(0);
            $table->decimal('selection_percent', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fbr_fywise');
    }
};
