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
        Schema::create('record_rooms', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE')->comment('ID');
            $table->string('title')->comment('Title');
            $table->integer('project_id')->index('idx_project_id')->comment('Project');
            $table->boolean('is_default')->nullable()->default(false);
            $table->boolean('is_active')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->comment('Updated Date');

          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_rooms');
    }
};
