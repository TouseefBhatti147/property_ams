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
        Schema::create('dc_groups', function (Blueprint $table) {
            $table->integer('group_id', true);
            $table->integer('module_id');
            $table->string('group_title', 2000);
            $table->integer('it_role_id')->default(0);
            $table->integer('it_ver_role_id')->default(0);
            $table->integer('sales_role_id')->default(0);
            $table->integer('sales_ver_role_id')->default(0);
            $table->integer('finance_role_id')->default(0);
            $table->integer('finance_ver_role_id')->default(0);
            $table->integer('rec_role_id')->default(0);
            $table->integer('rec_ver_role_id')->default(0);
            $table->integer('audit_role_id')->default(0);
            $table->integer('audit_ver_role_id')->default(0);
            $table->integer('no_of_statuses')->default(0);
            $table->integer('it_role_status_id')->default(0);
            $table->string('it_role_status_title', 100);
            $table->integer('it_ver_role_status_id')->default(0);
            $table->string('it_ver_role_status_title', 100);
            $table->integer('sales_role_status_id')->default(0);
            $table->string('sales_role_status_title', 100);
            $table->integer('sales_ver_role_status_id')->default(0);
            $table->string('sales_ver_role_status_title', 100);
            $table->integer('finance_role_status_id')->default(0);
            $table->string('finance_role_status_title', 100);
            $table->integer('finance_ver_role_status_id')->default(0);
            $table->string('finance_ver_role_status_title', 100);
            $table->integer('rec_role_status_id')->default(0);
            $table->string('rec_role_status_title', 100);
            $table->integer('rec_ver_role_status_id')->default(0);
            $table->string('rec_ver_role_status_title', 100);
            $table->integer('audit_role_status_id')->default(0);
            $table->string('audit_role_status_title', 100);
            $table->integer('audit_ver_role_status_id')->default(0);
            $table->string('audit_ver_role_status_title', 100);
            $table->integer('reserved_status_id');
            $table->string('reserved_status_title', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dc_groups');
    }
};
