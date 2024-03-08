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
        Schema::create('property_blocks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('sector_id', 256);
            $table->longText('block_name');
            $table->longText('details');
            $table->dateTime('create_date');
            $table->dateTime('modify_date');
            $table->integer('allow_in_portal');
            $table->integer('tag_id')->default(0);
            $table->integer('sort_order');
            $table->date('dev_charges_start_date')->nullable();
            $table->date('possession_start_date')->nullable();
            $table->date('dues_cleared_upto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_blocks');
    }
};
