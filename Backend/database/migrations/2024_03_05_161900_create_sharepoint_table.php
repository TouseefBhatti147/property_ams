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
        Schema::create('sharepoint', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('user_id')->comment('User');
            $table->string('title')->comment('Title');
            $table->string('filename')->comment('Attachment');
            $table->string('type')->nullable()->comment('File Type');
            $table->boolean('shared')->nullable()->default(false)->comment('Shared');
            $table->boolean('status')->default(true)->comment('Status');
            $table->dateTime('created_at')->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->useCurrent()->comment('Updated Date');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sharepoint');
    }
};
