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
        Schema::create('news_alerts', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->date('start_from')->nullable();
            $table->date('ends_on')->nullable();
            $table->boolean('status')->nullable()->default(true)->comment('\'0\'=>\'Draft\',         \'1\'=>\'Published\',           \'2\'=>\'Archived\',
\'3\'=>\'Disabled\'');
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
        Schema::dropIfExists('news_alerts');
    }
};
