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
        Schema::create('marketing_leads', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('campaign_id')->nullable();
            $table->integer('property_type_id')->nullable()->default(0);
            $table->integer('size_id')->nullable();
            $table->integer('plan_id')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('cnic')->nullable();
            $table->integer('countrycode')->default(92);
            $table->string('contact_no');
            $table->string('location')->nullable();
            $table->integer('country_id')->nullable();
            $table->boolean('status')->nullable()->default(true)->comment('1= New, 2= Contacted, 3= Matured, 4= Booked, 5= Closed');
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('marketing_leads');
    }
};
