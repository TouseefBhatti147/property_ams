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
        Schema::create('push_notifications', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('title', 1000);
            $table->text('description');
            $table->string('url', 1000);
            $table->string('img_url', 1000);
            $table->string('ios_s_name', 100);
            $table->string('ios_c_name', 100);
            $table->timestamp('createdAt')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updatedAt')->useCurrent();
            $table->tinyInteger('is_update');
            $table->tinyInteger('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('push_notifications');
    }
};
