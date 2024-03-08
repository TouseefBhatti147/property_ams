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
        Schema::create('calendar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day', 50)->nullable();
            $table->date('date')->nullable();
            $table->integer('year')->nullable();
            $table->boolean('holiday')->nullable()->default(false);
            $table->string('remarks')->nullable();
            $table->boolean('gazetted')->nullable()->default(false);
    
            $table->timestamps(); // Assuming you want to have created_at and updated_at columns
    
            // You don't need to specify primary key separately, it's automatically set
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calender');
    }
};
