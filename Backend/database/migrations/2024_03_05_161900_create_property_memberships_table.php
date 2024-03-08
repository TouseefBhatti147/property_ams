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
        Schema::create('property_memberships', function (Blueprint $table) {
            $table->bigIncrements('ms_id');
            $table->integer('plot_id')->index('idx_plotid');
            $table->integer('member_id')->index('idx_memberid');
            $table->string('form_no', 50)->nullable();
            $table->integer('ms_type')->index('idx_mstype');
            $table->integer('ms_sub_type')->default(0);
            $table->integer('ms_status')->index('idx_msstatus');
            $table->dateTime('created_on')->nullable()->useCurrent();
            $table->dateTime('modified_on')->nullable();
            $table->integer('nominee_id')->default(0)->index('idx_nomineeid');
            $table->tinyInteger('is_joint')->nullable();
            $table->integer('parent_ms_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('ms_no', 30)->nullable();
            $table->tinyInteger('is_active')->nullable()->comment('1: property only, 2: finance only, 3: both');
            $table->integer('submitted_by')->nullable()->default(0);
            $table->date('submission_date')->nullable();
            $table->string('submission_remarks', 255)->nullable();
            $table->integer('verified_by')->nullable()->default(0);
            $table->date('verification_date')->nullable();
            $table->string('verification_remarks', 255)->nullable();
            // Add more columns as needed, ensuring sizes are reasonable
            // Adjust column sizes and types to fit within the maximum row size limit
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
        Schema::dropIfExists('property_memberships');
    }
};
