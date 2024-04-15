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
        Schema::create('charges', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable();
            $table->string('note')->nullable();
            $table->string('monthly', 200)->nullable();
            $table->string('total', 200)->nullable();
            $table->string('type', 256)->nullable();
            $table->string('project_id', 150)->nullable();
            $table->integer('category_id')->default(0);
            $table->integer('external_id')->default(0);
            $table->tinyInteger('shift_on_transfer')->default(0);
            $table->integer('old_id')->nullable();
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
        Schema::dropIfExists('charges');
    }
};
