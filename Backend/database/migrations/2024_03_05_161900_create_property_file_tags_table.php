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
        Schema::create('property_file_tags', function (Blueprint $table) {
            $table->integer('tag_id', true);
            $table->string('title', 500);
            $table->integer('sort_order');
            $table->integer('status');
            $table->string('label', 50);
            $table->string('abbrev', 30);
            $table->tinyInteger('allow_in_csc')->default(0);
            $table->tinyInteger('allow_in_lsc')->default(0);
            $table->boolean('allow_in_portal')->default(true);
            $table->integer('category_id');
            $table->text('alloc_blocks')->nullable();
            $table->text('alloc_sectors')->nullable();
            $table->integer('portal_allocation')->default(0);
            $table->text('allocation_message')->nullable();
            $table->text('alloc_blocks_member')->nullable();
            $table->text('alloc_sectors_member')->nullable();
            $table->string('attachment', 100)->nullable();
            $table->integer('tag_for')->default(0)->comment('1: plots, 2: property');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_file_tags');
    }
};
