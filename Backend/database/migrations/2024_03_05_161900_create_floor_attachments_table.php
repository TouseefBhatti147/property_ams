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
        Schema::create('floor_attachments', function (Blueprint $table) {
            $table->integer('attachment_id', true);
            $table->integer('floor_id');
            $table->text('title')->nullable();
            $table->string('attachment', 100)->nullable();
            $table->integer('sort_order')->default(0);
            $table->integer('status')->default(0);
            $table->text('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('floor_attachments');
    }
};
