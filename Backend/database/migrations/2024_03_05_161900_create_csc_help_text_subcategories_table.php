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
        Schema::create('csc_help_text_subcategories', function (Blueprint $table) {
            $table->increments('subcategory_id')->comment('Subcategory ID');
            $table->unsignedInteger('category_id')->comment('Category ID');
            $table->string('title')->comment('Title');
            $table->integer('ordering')->default(1)->comment('Ordering');
            $table->boolean('status')->default(true)->comment('Status');
    
            // Foreign key constraint for category_id
            $table->foreign('category_id')->references('category_id')->on('csc_help_text_categories')->onDelete('cascade');
    
            // Remove the primary key definition for subcategory_id, as it's already defined by increments()
            // $table->primary('subcategory_id'); // Commented out
    
            // Unique constraint
            $table->unique('subcategory_id', 'subcategory_id_UNIQUE');
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
        Schema::dropIfExists('csc_help_text_subcategories');
    }
};
