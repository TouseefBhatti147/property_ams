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
        Schema::create('user_devices', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('user_id')->index('idx_user_id')->comment('User');
            $table->string('user_agent', 500)->comment('User Agent');
            $table->string('device')->nullable()->comment('Device');
            $table->string('device_id')->index('idx_device_id')->comment('Device ID');
            $table->string('region', 1000)->nullable()->comment('Region');
            $table->dateTime('requested_at')->nullable()->comment('Requested Date');
            $table->string('requester_comments', 500)->nullable()->comment('Requester Comments');
            $table->dateTime('activated_at')->nullable()->comment('Activated Date');
            $table->integer('activated_by')->nullable()->default(0);
            $table->boolean('is_active')->nullable()->default(false)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_devices');
    }
};
