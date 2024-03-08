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
        Schema::create('event_sequence', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('event_id')->index('idx_event_id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('description', 500);
            $table->integer('ordering')->nullable()->default(1);
            $table->string('filename');
            $table->boolean('status')->nullable()->default(true);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_sequence');
    }
};
