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
        Schema::create('csc_help_text_categories', function (Blueprint $table) {
            $table->increments('category_id')->comment('Category ID');
            $table->string('title')->comment('Title');
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
            $table->boolean('status')->nullable()->default(true)->comment('Status');
    
            // Remove the explicit declaration of primary key
        });
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_help_text_categories');
    }
};
