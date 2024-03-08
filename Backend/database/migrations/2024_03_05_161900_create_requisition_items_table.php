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
        Schema::create('requisition_items', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('requisition_id')->index('idx_reqid');
            $table->string('ms_no')->nullable();
            $table->dateTime('return_at')->nullable();
            $table->longText('requester_comments')->nullable();
            $table->longText('approval_comments')->nullable();
            $table->longText('approval_2_comments')->nullable();
            $table->longText('issuer_comments')->nullable();
            $table->integer('approval_by_user_id')->nullable()->default(0);
            $table->integer('approval_2_by_user_id')->nullable()->default(0);
            $table->integer('issuance_by_user_id')->nullable()->default(0);
            $table->dateTime('issued_at')->nullable();
            $table->dateTime('returned_at')->nullable();
            $table->integer('received_by_user_id')->nullable();
            $table->boolean('status')->nullable()->default(true)->index('idx_status')->comment('[1 = Requested, 2=Reviewed, 3=Supervised, 4=Approved  , 5 = Issued , 6= Denied , 7= Not Available , 8= Returned ]');
            $table->longText('status_history')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('plot_id')->nullable()->index('idx_plotid');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisition_items');
    }
};
