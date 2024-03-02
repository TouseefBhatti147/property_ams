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
        Schema::create('tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tracking_no', 255)->nullable()->index();
            $table->integer('document_no')->nullable()->index();
            $table->string('form_no', 255)->nullable();
            $table->integer('tracking_type')->nullable()->comment('1: Membership: Booking, 2: Membership: Transfer, 3: Membership: Cancellation, 4: Membership: Merge, 11: Instrument: Cash, 12: Instrument: Cheque/PO, 13: Instrument: Online Transfer (UBL), 16: Instrument: Funds Transfer');
            $table->integer('sales_center_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('detail_id')->nullable();
            $table->integer('step_no')->nullable()->index();
            $table->tinyInteger('is_last_step')->default(0);
            $table->string('step_title', 255)->nullable();
            $table->string('step_description', 255)->nullable();
            $table->string('step_department', 255)->nullable();
            $table->integer('department_category_id')->default(0);
            $table->string('gap', 255)->nullable();
            $table->date('due_date')->nullable();
            $table->dateTime('forwarded_date')->nullable();
            $table->integer('forwarded_by')->nullable();
            $table->dateTime('submitted_date')->nullable();
            $table->integer('submitted_by')->nullable();
            $table->dateTime('received_date')->nullable();
            $table->integer('received_by')->nullable();
            $table->longText('comments')->nullable();
            $table->tinyInteger('status')->default(1)->index()->comment('1=Pending, 2=Current, 3=Done, 4=On Hold, 5=Cancelled');
            $table->tinyInteger('current_status')->default(1)->index()->comment('1=Pending, 2=Received, 3=Submitted, 4=Forwarded');
            $table->integer('delay')->nullable();
            $table->date('rev_due_date')->nullable();
            $table->tinyInteger('file_tagged')->default(0);
            $table->tinyInteger('returned')->default(0)->comment('2 = returned');
            $table->dateTime('returned_at')->nullable();
            $table->integer('returned_from_step_no')->default(0);
            $table->integer('return_delay_plus')->default(0);
            $table->integer('return_delay_minus')->default(0);
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
        Schema::dropIfExists('tracking');
    }
};
