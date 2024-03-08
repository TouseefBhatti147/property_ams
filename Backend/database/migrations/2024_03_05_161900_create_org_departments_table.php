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
        Schema::create('org_departments', function (Blueprint $table) {
            $table->unsignedInteger('dept_id')->unique('dept_id_UNIQUE');
            $table->string('title', 200);
            $table->boolean('support')->default(false);
            $table->integer('category_id')->default(0);

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('org_departments');
    }
};
