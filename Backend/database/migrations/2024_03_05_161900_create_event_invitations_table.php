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
        Schema::create('event_invitations', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('invitation_id_UNIQUE');
            $table->integer('event_id')->index('idx_event_id');
            $table->string('invitation_no', 100)->nullable();
            $table->string('qr_code', 1000)->nullable();
            $table->string('name', 500)->nullable();
            $table->integer('countrycode')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('contact_no', 100)->nullable();
            $table->string('email')->nullable();
            $table->string('picture')->nullable();
            $table->string('title')->nullable()->comment('Business Title');
            $table->string('job_title')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('cnic')->nullable();
            $table->string('dealer')->nullable();
            $table->boolean('status')->default(true)->comment('[            \'1\' => \'Active\',            \'2\' => \'Registered\' ]');
            $table->dateTime('registered_date')->nullable();
            $table->boolean('attendance_status')->nullable()->default(false);
            $table->dateTime('attendance_date')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->boolean('scanned')->nullable()->default(false);
            $table->dateTime('scan_datetime')->nullable();

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_invitations');
    }
};
