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
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 200);
            $table->string('name', 200)->nullable();
            $table->string('sign', 200)->nullable();
            $table->decimal('charges', 10)->nullable()->default(10);
            $table->integer('category_id')->nullable()->default(0);
            $table->integer('for_plots')->nullable()->default(0);
            $table->integer('for_villas')->nullable()->default(0);
            $table->decimal('charges_villas', 10)->nullable()->default(5);
            $table->boolean('for_villa_apartments')->nullable()->default(false);
            $table->decimal('charges_villa_apartments', 10)->nullable()->default(5);
            $table->integer('for_appartments')->nullable()->default(0);
            $table->integer('for_offices')->nullable()->default(0);
            $table->integer('for_shops')->nullable()->default(0);
            $table->integer('priority')->nullable()->default(1);
            $table->decimal('charges_apartments', 10)->default(0);
            $table->decimal('charges_shops', 10)->default(0);
            $table->decimal('charges_villas_joint', 10)->default(0);
            $table->integer('old_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
