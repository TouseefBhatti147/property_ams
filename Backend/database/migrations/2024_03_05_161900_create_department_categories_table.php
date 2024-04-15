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
        Schema::create('department_categories', function (Blueprint $table) {
            $table->integer('department_category_id', true)->unique('category_id_UNIQUE')->comment('Department Category ID');
            $table->string('title')->comment('Title');
            $table->integer('ordering')->nullable()->comment('Ordering');
            $table->boolean('status')->nullable()->default(true)->comment('Status');
            $table->integer('child_id_start')->nullable();
            $table->integer('child_id_end')->nullable();
            $table->boolean('is_main')->nullable()->default(false);
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
        Schema::dropIfExists('department_categories');
    }
};
