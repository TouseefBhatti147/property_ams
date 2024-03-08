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
        Schema::create('user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('person_name', 500);
            $table->string('middelname', 256)->nullable();
            $table->string('lastname', 256)->nullable();
            $table->integer('sales_center_id')->nullable()->default(0);
            $table->string('pic', 100)->nullable();
            $table->string('sodowo', 256)->nullable();
            $table->string('cnic', 256)->nullable();
            $table->string('address', 2000)->nullable();
            $table->string('city', 256)->nullable();
            $table->string('email', 256)->nullable();
            $table->string('state', 256)->nullable();
            $table->string('zip', 256)->nullable();
            $table->string('designation')->nullable();
            $table->string('country', 256)->nullable();
            $table->integer('countrycode')->nullable();
            $table->string('mobile', 200)->nullable();
            $table->string('username', 128)->nullable();
            $table->string('password', 128)->nullable();
            $table->string('status', 128);
            $table->binary('fp')->nullable();
            $table->string('login_status', 128)->nullable();
            $table->string('user_id', 128)->nullable();
            $table->string('create_date', 128)->nullable();
            $table->string('modify_date', 128)->nullable();
            $table->integer('role_id');
            $table->integer('role_type');
            $table->integer('role_type_id')->default(0);
            $table->string('roles')->nullable();
            $table->integer('employee_no')->nullable();
            $table->integer('printer_rosolution')->nullable();
            $table->string('usersecret', 500)->nullable();
            $table->integer('associate_company_id');
            $table->integer('department_category_id')->nullable();
            $table->integer('dept_id');
            $table->integer('is_contact_person')->nullable();
            $table->boolean('is_appointee')->nullable()->default(false);
            $table->boolean('is_presenter')->nullable()->default(false);
            $table->string('sectoken', 20)->nullable();
            $table->string('sectoken_expiry', 19)->nullable();
            $table->dateTime('last_pass_change_at')->nullable()->useCurrent();
            $table->boolean('force_pass_change')->nullable()->default(true);
            $table->boolean('reset_pass_req')->nullable()->default(false);
            $table->boolean('sms_auth')->nullable()->default(true);
            $table->string('sms_auth_token', 100)->nullable();
            $table->dateTime('sms_auth_expiry')->nullable();
            $table->boolean('device_auth')->nullable()->default(false);
            $table->string('projects_per_reports')->nullable()->comment('Projects Permissions for Reports ');
            $table->string('projects_per_csc')->nullable();
            $table->string('projects_per')->nullable();
            $table->string('projects_per_staff')->nullable();
            $table->string('projects_per_editing')->nullable();
            $table->boolean('device_auth_by_sms')->nullable()->default(false);
            $table->boolean('extra_auth_layer')->nullable()->default(false);
            $table->integer('reporting_to')->nullable()->default(0);
            $table->tinyInteger('devices_allowed')->nullable()->default(1);
            $table->integer('dashboard_id')->nullable();
            $table->integer('old_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
