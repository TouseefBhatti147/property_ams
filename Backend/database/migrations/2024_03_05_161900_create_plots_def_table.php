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
        Schema::create('plots_def', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('project_id');
            $table->integer('size_id');
            $table->string('type', 256);
            $table->integer('total')->default(0);
            $table->date('create_date');
            $table->integer('sector')->default(0);
            $table->integer('fdh_reserved')->default(0);
            $table->integer('associate_reserved')->default(0);
            $table->integer('tag_id')->default(0);
            $table->integer('total_files')->default(0);
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
        Schema::dropIfExists('plots_def');
    }
};
