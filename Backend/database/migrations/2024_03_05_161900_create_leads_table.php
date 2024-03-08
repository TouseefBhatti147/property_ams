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
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('property_type_id')->nullable()->default(0);
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('cnic')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('countrycode')->nullable()->default(92);
            $table->string('contact_no')->nullable();
            $table->string('location')->nullable();
            $table->string('qrcode')->nullable();
            $table->tinyInteger('discount_per')->nullable()->default(10);
            $table->boolean('status')->nullable()->default(true)->comment('1= New, 2= Contacted, 3= Matured, 4= Booked, 5= Closed');
            $table->longText('remarks')->nullable();
            $table->date('expiry_date')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();

       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
};
