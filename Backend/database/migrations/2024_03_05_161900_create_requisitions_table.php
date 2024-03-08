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
        Schema::create('requisitions', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->unsignedTinyInteger('requisition_type')->nullable()->default(1)->comment('[1= Record Section Files Requisitions ]');
            $table->integer('record_room_id')->nullable()->default(0)->index('idx_rec_roomid');
            $table->integer('request_by_user_id')->nullable()->index('idx_reqbyuser');
            $table->longText('requester_comments')->nullable()->comment('requester remarks');
            $table->longText('approval_comments')->nullable()->comment('supervisor remarks');
            $table->longText('approval_2_comments')->nullable()->comment('manager remarks');
            $table->longText('issuer_comments')->nullable();
            $table->boolean('status')->nullable()->default(true)->index('idx_status')->comment('[ 1= New , 2 = Reviewed/ In Process , 7=On Hold, 8=Archived]');
            $table->longText('status_history')->nullable();
            $table->dateTime('archived_at')->nullable();
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
        Schema::dropIfExists('requisitions');
    }
};
