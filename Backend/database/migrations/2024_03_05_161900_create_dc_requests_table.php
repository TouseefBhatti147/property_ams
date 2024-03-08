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
        Schema::create('dc_requests', function (Blueprint $table) {
            $table->bigIncrements('request_id'); // Remove the unique constraint
    
            // Add other columns as needed
            $table->integer('request_type_id');
            $table->integer('orig_user_by_id');
            $table->dateTime('orig_user_by_date');
            $table->string('orig_user_by_remarks', 2000);
            // Add more columns...
    
            // No need to explicitly define primary key again
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dc_requests');
    }
};
