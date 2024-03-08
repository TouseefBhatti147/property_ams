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
        Schema::create('projects', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('project_name', 256);
            $table->string('alias', 45)->nullable();
            $table->string('url', 256);
            $table->string('code', 256);
            $table->longText('teaser');
            $table->longText('details');
            $table->string('project_image', 256);
            $table->string('project_map', 256);
            $table->string('land_map', 256);
            $table->integer('status');
            $table->dateTime('create_date');
            $table->dateTime('modify_date');
            $table->integer('membership_fee');
            $table->string('report_title_line1', 1000)->nullable();
            $table->string('report_title_line2', 1000)->nullable();
            $table->string('headoffice_address', 1000)->nullable();
            $table->string('bank_acc_title', 500);
            $table->string('company_name')->nullable();
            $table->string('icon', 100)->nullable();
            $table->integer('old_id')->nullable();
            $table->string('ntn_no', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
