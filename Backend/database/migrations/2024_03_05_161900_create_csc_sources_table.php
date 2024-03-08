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
        Schema::create('csc_sources', function (Blueprint $table) {
            $table->increments('source_id')->comment('Source ID');
            $table->string('title')->comment('Title');
            $table->string('image')->nullable();
            $table->integer('ordering')->default(1)->comment('Ordering');
            $table->boolean('status')->default(true)->comment('Status');

            $table->unique(['source_id'], 'source_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_sources');
    }
};
