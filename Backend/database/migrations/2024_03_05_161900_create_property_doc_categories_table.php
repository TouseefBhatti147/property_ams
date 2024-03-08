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
        Schema::create('property_doc_categories', function (Blueprint $table) {
            $table->integer('category_id', true);
            $table->string('category_title', 200);
            $table->integer('sort_order');
            $table->string('path', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_doc_categories');
    }
};
