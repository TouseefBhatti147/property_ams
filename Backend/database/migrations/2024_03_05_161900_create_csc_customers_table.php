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
        Schema::create('csc_customers', function (Blueprint $table) {
            $table->increments('customer_id')->unique('customer_id_UNIQUE');
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('member_id')->nullable()->default(0)->index('idx_member_id');
            $table->string('name');
            $table->string('cnic', 13)->nullable();
            $table->string('email')->nullable();
            $table->integer('countrycode')->nullable();
            $table->string('mobile')->nullable();
            $table->integer('created_by')->default(0);
            $table->boolean('status')->nullable()->default(true);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->timestamps(); // Add timestamps


        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_customers');
    }
};
