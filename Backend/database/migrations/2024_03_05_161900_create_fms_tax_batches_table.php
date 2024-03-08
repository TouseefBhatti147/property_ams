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
        Schema::create('fms_tax_batches', function (Blueprint $table) {
            $table->integer('batch_id', true);
            $table->integer('for_tax')->default(0);
            $table->date('reg_date')->nullable();
            $table->string('serial_no', 100)->nullable();
            $table->integer('status')->default(0);
            $table->dateTime('submission_date')->nullable();
            $table->text('submission_remarks')->nullable();
            $table->integer('submitted_by')->default(0);
            $table->dateTime('verification_date')->nullable();
            $table->text('verification_remarks')->nullable();
            $table->integer('verified_by')->default(0);
            $table->string('ref_no', 300)->nullable();
            $table->integer('created_by')->default(0);
            $table->dateTime('created_on')->nullable();
            $table->text('reg_remarks')->nullable();
            $table->date('criteria_upto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fms_tax_batches');
    }
};
