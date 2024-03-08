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
        Schema::create('paypro_slabs', function (Blueprint $table) {
            $table->integer('slab_id', true);
            $table->string('slab_name', 100)->nullable();
            $table->decimal('min_amount', 10, 0)->default(0);
            $table->decimal('max_amount', 10, 0)->default(0);
            $table->decimal('rate', 10, 0)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paypro_slabs');
    }
};
