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
        Schema::create('tracking_transfers', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('tracking_no')->nullable();
            $table->string('ms_id')->nullable();
            $table->integer('sales_center_id')->nullable()->default(0);
            $table->integer('project_id')->nullable()->default(0)->index('idx_projectid');
            $table->integer('property_type_id')->nullable()->default(0);
            $table->integer('config_detail_id')->nullable()->default(0);
            $table->integer('step_no')->nullable()->default(0)->index('idx_stepno');
            $table->boolean('is_last_step')->nullable()->default(false);
            $table->string('step_title')->nullable();
            $table->integer('department_category_id')->nullable()->default(0);
            $table->integer('gap')->nullable()->default(0);
            $table->date('due_date')->nullable();
            $table->date('rev_due_date')->nullable();
            $table->integer('received_by')->nullable()->default(0);
            $table->dateTime('received_date')->nullable();
            $table->integer('forwarded_by')->nullable()->default(0);
            $table->dateTime('forwarded_date')->nullable();
            $table->integer('submitted_by')->nullable()->default(0);
            $table->dateTime('submitted_date')->nullable();
            $table->boolean('status')->nullable()->default(true)->index('idx_status')->comment('1= Pending, 2=Current, 3=Done');
            $table->boolean('current_status')->nullable()->default(true)->index('idx_currentstatus')->comment('1=Pending, 2=Received, 3=Submitted, 4=Forwarded');
            $table->integer('delay')->nullable()->default(0);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->boolean('returned')->nullable()->default(false)->comment('2 = returned');
            $table->dateTime('returned_at')->nullable();
            $table->integer('returned_from_step_no')->nullable()->default(0);

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking_transfers');
    }
};
