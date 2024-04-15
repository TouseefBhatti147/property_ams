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
        Schema::create('csc_ticket_issues', function (Blueprint $table) {
            $table->increments('id')->comment('ID'); // Remove the unique constraint
    
            $table->integer('ticket_id')->index('idx_ticket_id')->comment('Ticket ');
            $table->integer('issue_type_id')->index('idx_issue_type_id')->comment('Issue Type');
            $table->longText('comments')->nullable()->comment('Comments');
            $table->string('attachment_1')->nullable();
            $table->string('attachment_2')->nullable();
            $table->string('attachment_3')->nullable();
            $table->string('attachment_1_ref', 150)->nullable();
            $table->string('attachment_2_ref', 150)->nullable();
            $table->string('attachment_3_ref', 150)->nullable();
            $table->date('attachment_1_date')->nullable();
            $table->date('attachment_2_date')->nullable();
            $table->date('attachment_3_date')->nullable();
            $table->boolean('status')->nullable()->default(true)->comment('Status');
            $table->timestamps(); // Add timestamps

        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_ticket_issues');
    }
};
