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
    Schema::create('members', function (Blueprint $table) {
        $table->integer('id', true);
        $table->string('name', 256);
        $table->string('mem_id')->nullable();
        $table->string('username', 100)->nullable();
        $table->string('sodowo', 256)->nullable();
        $table->string('cnic', 100)->index('cnic');
        $table->string('cnic_pic', 100)->nullable();
        $table->string('image', 256)->nullable();
        $table->string('address', 300)->nullable();
        $table->integer('city_id')->nullable()->default(0);
        $table->string('phone')->nullable();
        $table->string('phone2', 100)->nullable();
        $table->integer('countrycode')->nullable()->default(0);
        $table->integer('countrycode2')->nullable()->default(0);
        $table->string('mobile_without_cc')->nullable();
        $table->string('email', 191)->nullable(); // Adjusted length to fit within index limits
        $table->integer('country_id')->nullable()->default(0);
        $table->string('state', 100)->nullable();
        $table->integer('rwa')->nullable()->default(0);
        // Rest of the columns...
    });

    // Add index with custom length
    Schema::table('members', function (Blueprint $table) {
        $table->index('email', 'email_index')->length(191); // Adjust length as per your requirements
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
