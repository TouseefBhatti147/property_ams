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
        Schema::create('tracking_archived_bookings', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('tracking_id');
            $table->string('tracking_no')->nullable();
            $table->string('document_no')->nullable();
            $table->string('form_no')->nullable();
            $table->integer('tracking_type')->nullable()->default(0);
            $table->integer('sales_center_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('step_no')->nullable();
            $table->boolean('is_last_step')->nullable()->default(false);
            $table->string('step_title')->nullable();
            $table->text('step_description')->nullable();
            $table->string('step_department')->nullable();
            $table->date('due_date')->nullable();
            $table->dateTime('forwarded_date')->nullable();
            $table->integer('forwarded_by')->nullable();
            $table->dateTime('submitted_date')->nullable();
            $table->integer('submitted_by')->nullable();
            $table->dateTime('received_date')->nullable();
            $table->integer('received_by')->nullable();
            $table->longText('comments')->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->boolean('current_status')->nullable();
            $table->dateTime('created_at')->nullable();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking_archived_bookings');
    }
};
