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
        Schema::create('property_reports', function (Blueprint $table) {
            $table->bigInteger('report_id', true);
            $table->integer('report_type');
            $table->integer('plot_id');
            $table->bigInteger('ms_id');
            $table->bigInteger('member_id');
            $table->integer('user_id');
            $table->dateTime('created_on');
            $table->string('remarks', 2000);
            $table->integer('version');
            $table->integer('status')->comment('1= printed
2= received
3= dispatched');
            $table->string('courier_name')->nullable();
            $table->string('courier_ref')->nullable();
            $table->integer('dealer_id')->nullable();
            $table->integer('printed_by')->nullable();
            $table->dateTime('printed_at')->nullable();
            $table->integer('received_by')->nullable();
            $table->dateTime('received_at')->nullable();
            $table->integer('dispatched_by')->nullable();
            $table->dateTime('dispatched_at')->nullable();
            $table->longText('history')->nullable();
            $table->boolean('reprinting')->nullable()->default(false);
            $table->tinyInteger('is_duplicate')->nullable()->default(0);
            $table->date('prev_doc_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_reports');
    }
};
