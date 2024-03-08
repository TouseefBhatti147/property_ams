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
        Schema::create('rec_followups', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('watch_list_cat_id')->nullable();
            $table->integer('watch_list_id')->nullable();
            $table->integer('watch_list_data_id')->nullable();
            $table->integer('member_id');
            $table->date('contacted_on')->nullable();
            $table->integer('contact_status')->nullable()->default(1)->comment('[1=Pending, 2=Contacted, 3=Failed to Contact');
            $table->integer('user_id');
            $table->integer('contact_method')->nullable()->comment('[ 1=SMS, 2=Email, 3=Call, 4=Meeting , 5=Warning Letter ]');
            $table->integer('response_type')->nullable()->comment('[ 1=Excellent, 2=Good, 3=Normal, 4=Bad, 5=Misbehaved ]');
            $table->integer('status_tag')->nullable()->default(1)->comment('[ 1=Normal, 2=Block Listing , 3=Warning , 4=Criticals ]');
            $table->text('user_comments')->nullable();
            $table->integer('sales_center_id')->nullable();
            $table->integer('recovery_flag')->nullable()->default(1)->comment('[ 1=Normal Delay, 2=High Delay, 3=Warning, 4=Critical ] ');
            $table->date('recontact_schedule')->nullable();
            $table->text('manager_comments')->nullable();
            $table->integer('followup_status')->nullable()->default(1)->comment('[1=Watching, 2=Cleared]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rec_followups');
    }
};
