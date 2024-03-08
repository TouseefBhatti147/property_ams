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
        Schema::create('doc_checklists', function (Blueprint $table) {
            $table->integer('checklist_id', true);
            $table->integer('checklist_for')->default(0);
            $table->string('title', 1000)->nullable();
            $table->integer('status')->default(0);
            $table->integer('sort_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_checklists');
    }
};
