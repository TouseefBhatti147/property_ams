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
        Schema::create('property_meta', function (Blueprint $table) {
            $table->integer('property_id')->primary();
            $table->decimal('choices_percent', 10)->default(0);
            $table->decimal('unsold_dev_charges', 10)->default(0);
            $table->decimal('unalloc_dev_charges', 10)->default(0);
            $table->decimal('unsold_pl_charges', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_meta');
    }
};
