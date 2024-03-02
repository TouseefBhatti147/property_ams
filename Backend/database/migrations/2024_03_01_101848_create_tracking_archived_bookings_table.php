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
            $table->increments('id');
            $table->integer('tracking_id');
            $table->string('tracking_no', 255)->nullable();
            $table->string('document_no', 255)->nullable();
            $table->string('form_no', 255)->nullable();
            $table->integer('tracking_type')->default(0);
            $table->integer('sales_center_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('step_no')->nullable();
            $table->tinyInteger('is_last_step')->default(0);
            $table->string('step_title', 255)->nullable();
            $table->text('step_description')->nullable();
            $table->string('step_department', 255)->nullable();
            $table->date('due_date')->nullable();
            $table->dateTime('forwarded_date')->nullable();
            $table->integer('forwarded_by')->nullable();
            $table->dateTime('submitted_date')->nullable();
            $table->integer('submitted_by')->nullable();
            $table->dateTime('received_date')->nullable();
            $table->integer('received_by')->nullable();
            $table->longText('comments')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('current_status')->nullable();
            $table->timestamps();
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
