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
        Schema::create('csc_tickets', function (Blueprint $table) {
            $table->increments('ticket_id')->comment('Ticket ID');
            $table->integer('customer_id')->index('idx_customer_id')->comment('Customer');
            $table->string('ticket_no')->index('idx_ticket_no')->comment('Ticket No.');
            $table->integer('project_id')->comment('Project');
            $table->integer('source_id')->nullable()->comment('Source');
            $table->string('subject')->comment('Subject');
            $table->string('description', 3000)->nullable()->comment('Description');
            $table->string('ms_nos')->nullable()->index('idx_ms_no');
            $table->string('issues', 100)->nullable();
            $table->string('comments', 1000)->nullable()->comment('Comments');
            $table->integer('created_by')->index('idx_created_by')->comment('Created By');
            $table->integer('submitted_by')->nullable()->comment('Submitted By');
            $table->dateTime('submitted_at')->nullable()->comment('Submitted Date');
            $table->integer('resolved_by')->nullable()->comment('Resolved By');
            $table->dateTime('resolved_at')->nullable()->comment('Resolved date');
            $table->integer('verified_by')->nullable()->comment('Verified By');
            $table->dateTime('verified_at')->nullable()->comment('Verified Date');
            $table->integer('closed_by')->nullable()->comment('Closed By');
            $table->dateTime('closed_at')->nullable()->comment('Closed Date');
            $table->integer('status')->nullable()->default(1)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');
            $table->integer('count_total')->nullable()->default(0);
            $table->integer('count_new')->nullable()->default(0);
            $table->integer('count_in_process')->nullable()->default(0);
            $table->integer('count_resolved')->nullable()->default(0);
            $table->integer('count_verified')->nullable()->default(0);
            $table->integer('count_on_hold')->nullable()->default(0);
            $table->integer('count_closed')->nullable()->default(0);

            $table->unique(['ticket_id'], 'track_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_tickets');
    }
};
