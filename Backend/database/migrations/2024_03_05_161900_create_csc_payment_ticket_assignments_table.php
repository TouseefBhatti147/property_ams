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
        Schema::create('csc_payment_ticket_assignments', function (Blueprint $table) {
            $table->bigIncrements('id'); // No need to specify unique constraint separately
    
            $table->date('assign_date')->index('idx_assign_date');
            $table->integer('department_category_id')->nullable()->default(0);
            $table->unsignedInteger('user_id')->index('idx_user_id');
            $table->integer('quantity')->default(0);
            $table->unsignedTinyInteger('is_present')->nullable()->default(1);
            $table->unsignedInteger('short')->nullable()->default(0);
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
        Schema::dropIfExists('csc_payment_ticket_assignments');
    }
};
