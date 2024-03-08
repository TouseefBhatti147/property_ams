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
        Schema::create('property_documents', function (Blueprint $table) {
            $table->bigInteger('document_id', true);
            $table->integer('category_id');
            $table->string('title', 500);
            $table->string('file_name', 200);
            $table->string('remarks', 1000);
            $table->integer('project_id');
            $table->integer('sales_center_id');
            $table->integer('membership_id');
            $table->integer('entered_by');
            $table->date('entry_date');
            $table->integer('application_id');
            $table->integer('plot_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_documents');
    }
};
