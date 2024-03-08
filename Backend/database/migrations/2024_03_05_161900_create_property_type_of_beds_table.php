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
        Schema::create('property_type_of_beds', function (Blueprint $table) {
            $table->integer('type_id', true);
            $table->string('title', 200)->nullable();
            $table->integer('property_type')->default(0)->comment('apartment/studio apartment');
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_type_of_beds');
    }
};
