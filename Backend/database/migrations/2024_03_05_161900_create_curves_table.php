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
    Schema::create('curves', function (Blueprint $table) {
        $table->increments('id'); // Remove the unique constraint

        $table->unsignedInteger('user_id')->nullable()->default(0);
        $table->unsignedInteger('sno')->nullable()->default(0);
        $table->string('monthly')->nullable()->default('0');
        $table->string('plots')->nullable()->default('0');
        $table->string('confirmations_cum')->nullable()->default('0');
        $table->string('regulars_cum')->nullable()->default('0');
        $table->string('sale_amount')->nullable()->default('0');
        $table->string('received_amount')->nullable()->default('0');
        $table->string('receivable_until_cum')->nullable()->default('0');
        $table->string('due_amount_cum')->nullable()->default('0');
        $table->string('due_amount_until_cum')->nullable()->default('0');
        $table->string('overdue_amount_cum')->nullable()->default('0');
        $table->string('confirmations_amount')->nullable()->default('0');
        $table->string('confirmations_amount_received_cum')->nullable()->default('0');
        $table->string('confirmed_regulars_cum')->nullable()->default('0');
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
        Schema::dropIfExists('curves');
    }
};
