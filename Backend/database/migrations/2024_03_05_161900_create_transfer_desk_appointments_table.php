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
        Schema::create('transfer_desk_appointments', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('desk_id')->index('idx_desk_id');
            $table->integer('ms_id')->default(0)->index('idx_ms_id');
            $table->dateTime('dated')->index('idx_dated');
            $table->string('scheduled_time', 100);
            $table->integer('user_id')->nullable()->default(0);
            $table->text('remarks')->nullable();
            $table->boolean('status')->default(true)->comment('\'1\'=>\'Scheduled\',
 \'2\'=>\'Expired\',
\'3\'=>\'Attended\',
\'4\'=>\'Unattended\',
\'5\'=>\'Cancelled\'');
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
        Schema::dropIfExists('transfer_desk_appointments');
    }
};
