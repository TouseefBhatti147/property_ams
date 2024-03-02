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
       /*  Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->timestamps(); // This will automatically create created_at and updated_at columns
        }); */
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('person_name', 500);
            $table->string('middelname', 256)->nullable();
            $table->string('lastname', 256)->nullable();
            $table->integer('sales_center_id')->default(0);
            $table->string('pic', 100)->nullable();
            $table->string('sodowo', 256)->nullable();
            $table->string('cnic', 256)->nullable();
            $table->string('address', 2000)->nullable();
            $table->string('city', 256)->nullable();
            $table->string('email', 256)->nullable();
            $table->string('state', 256)->nullable();
            $table->string('zip', 256)->nullable();
            $table->string('designation', 255)->nullable();
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
            $table->string('roles', 255)->nullable();
            $table->integer('employee_no')->nullable();
            $table->integer('printer_rosolution')->nullable();
            $table->string('usersecret', 500)->nullable();
            $table->integer('associate_company_id');
            $table->integer('department_category_id')->nullable();
            $table->integer('dept_id');
            $table->integer('is_contact_person')->nullable();
            $table->tinyInteger('is_appointee')->default(0);
            $table->tinyInteger('is_presenter')->default(0);
            $table->string('sectoken', 20)->nullable();
            $table->string('sectoken_expiry', 19)->nullable();
            $table->dateTime('last_pass_change_at')->default(now());
            $table->tinyInteger('force_pass_change')->default(1);
            $table->tinyInteger('reset_pass_req')->default(0);
            $table->tinyInteger('sms_auth')->default(1);
            $table->string('sms_auth_token', 100)->nullable();
            $table->dateTime('sms_auth_expiry')->nullable();
            $table->tinyInteger('device_auth')->default(0);
            $table->string('projects_per_reports', 255)->nullable()->comment('Projects Permissions for Reports');
            $table->string('projects_per_csc', 255)->nullable();
            $table->string('projects_per', 255)->nullable();
            $table->string('projects_per_staff', 255)->nullable();
            $table->string('projects_per_editing', 255)->nullable();
            $table->tinyInteger('device_auth_by_sms')->default(0);
            $table->tinyInteger('extra_auth_layer')->default(0);
            $table->integer('reporting_to')->default(0);
            $table->tinyInteger('devices_allowed')->default(1);
            $table->integer('dashboard_id')->nullable();
            $table->integer('old_id')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
