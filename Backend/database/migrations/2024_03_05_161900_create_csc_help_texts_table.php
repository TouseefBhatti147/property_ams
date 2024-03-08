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
        Schema::create('csc_help_texts', function (Blueprint $table) {
            $table->increments('text_id')->comment('ID');
            $table->integer('subcategory_id')->comment('Subcategory');
            $table->string('sms')->nullable();
            $table->mediumText('content')->comment('Text Content');
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
            $table->boolean('status')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');

            $table->unique(['text_id'], 'text_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_help_texts');
    }
};
