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
        Schema::create('associate_companies', function (Blueprint $table) {
            $table->integer('company_id', true);
            $table->string('company_title', 1000)->nullable();
            $table->string('logo', 100)->nullable();
            $table->integer('status')->default(0);
            $table->string('remarks', 2000)->nullable();
            $table->string('reg_no', 30)->nullable();
            $table->string('company_desc1', 200)->nullable();
            $table->string('company_desc2', 200)->nullable();
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
        Schema::dropIfExists('associate_companies');
    }
};
