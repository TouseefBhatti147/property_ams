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
        Schema::create('rec_watch_lists', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('watch_list_cat_id');
            $table->string('title');
            $table->text('description');
            $table->integer('project_id')->nullable();
            $table->integer('community_type_id')->nullable()->comment('Unused field - [1=Pakistan , 2= Overseas] , Overseas can be filtered on overseas dealer id >> 1038  << in members table');
            $table->integer('size_cat_id')->nullable();
            $table->integer('property_type_id')->nullable()->comment('[1=Residential , 2=Commercial]');
            $table->date('booking_date')->nullable();
            $table->date('cutoff_date')->nullable();
            $table->boolean('confirmations')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rec_watch_lists');
    }
};
