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
        Schema::create('sec_modules', function (Blueprint $table) {
            $table->integer('module_id', true);
            $table->string('module_code', 300);
            $table->string('module_title', 300);
            $table->integer('module_so');
            $table->integer('parent_module_id')->nullable();
            $table->integer('for_reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_modules');
    }
};
