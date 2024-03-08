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
        Schema::create('payment_evidences', function (Blueprint $table) {
            $table->bigIncrements('record_id');
            $table->integer('member_id')->nullable()->index('idx_member_id');
            $table->integer('project_id')->nullable();
            $table->string('ms_no')->nullable()->index('idx_ms_no');
            $table->integer('amount')->nullable();
            $table->boolean('payment_mode')->nullable()->default(false);
            $table->string('ref_no')->nullable()->index('idx_ref_no');
            $table->string('name', 500);
            $table->string('cnic', 30)->index('cnic_idx');
            $table->string('country_code', 10);
            $table->string('cell', 50);
            $table->string('email', 200);
            $table->text('purpose_of_payment');
            $table->string('payment_evidence', 100);
            $table->string('attachment_2', 100)->nullable();
            $table->string('attachment_3', 100)->nullable();
            $table->integer('status')->default(1);
            $table->string('remarks', 2000)->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('submitted_by')->nullable();
            $table->dateTime('submission_date')->nullable();
            $table->string('submission_remarks', 1000)->nullable();
            $table->dateTime('entry_date')->nullable()->useCurrent();
            $table->dateTime('updated_on')->nullable()->useCurrent();
            $table->boolean('is_duplicate')->nullable()->comment('1= Possible Duplicate
2= Duplicate');
            $table->string('duplicate_of', 100)->nullable();

            $table->unique(['record_id'], 'record_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_evidences');
    }
};
