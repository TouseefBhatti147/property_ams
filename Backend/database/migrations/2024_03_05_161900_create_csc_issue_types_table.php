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
        Schema::create('csc_issue_types', function (Blueprint $table) {
            $table->increments('issue_type_id')->comment('Issue Type ID');
            $table->integer('department_category_id')->comment('Department Category');
            $table->string('title')->comment('Title');
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
            $table->boolean('status')->nullable()->default(true)->comment('Status');
            $table->timestamps(); // Add timestamps

            // No need to specify primary key constraint separately, as increments() already sets it as primary key
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_issue_types');
    }
};
