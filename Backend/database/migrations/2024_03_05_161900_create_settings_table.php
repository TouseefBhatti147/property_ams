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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('label');
            $table->string('type');
            $table->string('meta_key');
            $table->longText('meta_value')->nullable();
            $table->string('options', 1000)->nullable();
            $table->integer('ordering')->nullable();
            $table->boolean('editable')->nullable()->default(true);
            $table->integer('category')->nullable()->default(1);
            $table->boolean('status')->nullable()->default(true);
            $table->integer('droplist_type')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
