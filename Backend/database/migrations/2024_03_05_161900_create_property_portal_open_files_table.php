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
        Schema::create('property_portal_open_files', function (Blueprint $table) {
            $table->integer('open_file_id', true);
            $table->integer('dealer_id');
            $table->integer('ms_id');
            $table->integer('file_status');
            $table->date('reg_date');
            $table->integer('cert_mem_id');
            $table->integer('cert_nominee_id');
            $table->integer('no_of_months');
            $table->integer('sales_center_id');
            $table->string('form_no', 50);
            $table->date('cut_off_date');
            $table->string('submission_remarks', 2000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_portal_open_files');
    }
};
