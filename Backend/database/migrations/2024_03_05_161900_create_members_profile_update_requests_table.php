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
        Schema::create('members_profile_update_requests', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('member_id')->index('idx_member_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('countrycode')->nullable();
            $table->string('phone', 100)->nullable();
            $table->date('dob')->nullable();
            $table->integer('rwa')->nullable();
            $table->string('sodowo')->nullable();
            $table->string('address', 300)->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('countrycode2')->nullable();
            $table->string('phone2', 100)->nullable();
            $table->string('pic')->nullable();
            $table->integer('updated_by_user_id')->nullable()->index('idx_updated_by_user_id');
            $table->string('remarks', 1000)->nullable();
            $table->boolean('status')->nullable()->default(true)->comment('1=pending
2=approved
3=Partial Approved
4=rejected');
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->integer('lsc_bookings')->nullable();
            $table->integer('csc_bookings')->nullable();
            $table->boolean('lsc_printed')->nullable();
            $table->boolean('csc_printed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_profile_update_requests');
    }
};
