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
        Schema::create('balloting_results', function (Blueprint $table) {
            $table->bigIncrements('result_id');
            $table->integer('plot_id')->index('plot_id');
            $table->integer('property_id');
            $table->integer('result_type')->comment('manual/through balloting');
            $table->date('reg_date')->nullable();
            $table->integer('created_by')->nullable();
            $table->dateTime('created_on')->nullable();
            $table->integer('updated_by')->nullable();
            $table->dateTime('updated_on')->nullable();
            $table->string('remarks', 2000)->nullable();
            $table->integer('ms_id')->nullable();
            $table->string('ms_no', 50)->nullable();
            $table->string('file_no', 50)->nullable();
            $table->integer('property_type_id')->nullable();
            $table->string('property_type', 100)->nullable();
            $table->integer('size_id')->nullable()->default(0);
            $table->string('size', 100)->nullable();
            $table->string('plot_no', 50)->nullable();
            $table->string('street_no', 50)->nullable();
            $table->string('sector', 100)->nullable();
            $table->string('block', 100)->nullable()->comment('tag');
            $table->string('project', 500)->nullable();
            $table->text('choices')->nullable();
            $table->string('member_name', 500)->nullable();
            $table->string('cnic', 50)->nullable();
            $table->string('sodowo', 500)->nullable();
            $table->string('contact_no', 100)->nullable();
            $table->string('email', 200)->nullable();
            $table->integer('balloting_id')->nullable();
            $table->integer('result_for')->nullable();
            $table->integer('building_id')->nullable();
            $table->integer('status')->nullable();
            $table->bigInteger('member_id')->nullable();
            $table->text('address')->nullable();
            $table->text('joint_members')->nullable();
            $table->string('complete_ms_no', 50)->nullable();
            $table->string('rwa', 10)->nullable();
            $table->string('size_in_sy', 100)->nullable();
            $table->string('dealer')->nullable();
            $table->tinyInteger('ballotable_index')->nullable()->default(0);
            $table->integer('paid_amount_per')->nullable();
            $table->integer('overdue_per')->nullable();
            $table->integer('cutoff_paid_per')->nullable();
            $table->integer('cutoff_overdue_per')->nullable();
            $table->string('image', 200)->nullable();
            $table->bigInteger('prev_ms_id')->default(0);
            $table->integer('replaced_by')->default(0);
            $table->dateTime('replaced_on')->nullable()->useCurrent();
            $table->integer('project_id')->nullable()->default(0);
            $table->integer('tag1_id')->nullable()->default(0);
            $table->integer('sector_id')->nullable()->default(0);
            $table->text('prev_location')->nullable();

            $table->unique(['result_id'], 'result_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_results');
    }
};
