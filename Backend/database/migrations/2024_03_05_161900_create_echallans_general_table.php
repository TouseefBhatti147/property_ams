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
        Schema::create('echallans_general', function (Blueprint $table) {
            $table->bigInteger('record_id', true);
            $table->string('name', 500);
            $table->string('cnic', 30);
            $table->string('cell', 50)->nullable();
            $table->string('email', 200)->nullable();
            $table->dateTime('entry_date')->nullable();
            $table->integer('status')->nullable();
            $table->string('payment_evidence', 100)->nullable();
            $table->string('remarks', 2000)->nullable();
            $table->integer('user_id')->nullable();
            $table->dateTime('updated_on')->nullable();
            $table->integer('project_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('echallans_general');
    }
};
