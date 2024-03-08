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
        Schema::create('members_backup', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 256);
            $table->string('mem_id');
            $table->string('username', 100);
            $table->string('sodowo', 256);
            $table->string('cnic', 256);
            $table->string('cnic_pic', 100)->nullable();
            $table->string('image', 256)->nullable();
            $table->string('address', 2000)->nullable();
            $table->string('city_id', 256);
            $table->string('phone');
            $table->string('phone2', 100)->default('0');
            $table->integer('countrycode')->nullable();
            $table->integer('countrycode2')->default(0);
            $table->integer('mobile_without_cc')->nullable();
            $table->string('email', 256);
            $table->string('country_id', 256);
            $table->string('state', 100);
            $table->integer('rwa')->nullable()->default(0);
            $table->string('password', 128);
            $table->string('status', 128);
            $table->binary('fp');
            $table->string('login_status', 128);
            $table->string('user_id', 128);
            $table->string('create_date', 128);
            $table->string('modify_date', 128);
            $table->string('dob', 200);
            $table->string('RFM');
            $table->integer('parent_id')->nullable();
            $table->integer('relation_with_parent')->nullable();
            $table->integer('is_dealer')->nullable()->default(0);
            $table->string('dealers_business_title', 1000);
            $table->integer('dealer_group_id')->nullable();
            $table->string('relation_with_member', 200)->nullable();
            $table->integer('is_owner')->nullable();
            $table->integer('acc_activation_method');
            $table->string('acc_activation_key', 100);
            $table->integer('acc_activation_status');
            $table->date('last_activity_date');
            $table->integer('registration_method');
            $table->integer('login_attempts');
            $table->dateTime('last_login_attempt');
            $table->integer('allow_in_portal');
            $table->string('api_token')->comment('for mobile apis');
            $table->string('cnic_pic_back', 100);
            $table->integer('created_by');
            $table->dateTime('created_on');
            $table->integer('modified_by');
            $table->dateTime('modified_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_backup');
    }
};
