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
        Schema::create('size_cat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('size', 255)->charset('latin1')->collation('latin1_swedish_ci');
            $table->string('code', 256)->charset('latin1')->collation('latin1_swedish_ci');
            $table->integer('category_id')->index();
            $table->integer('is_form_house');
            $table->integer('size_in_yards');
            $table->string('dimension', 255)->nullable()->charset('latin1')->collation('latin1_swedish_ci');
            $table->integer('ordering')->default(1);
            $table->string('specs', 200)->charset('latin1')->collation('latin1_swedish_ci');
            $table->integer('allow_in_sales');
            $table->integer('size_in_sft')->default(0);
            $table->decimal('marla', 11, 2)->nullable();
            $table->integer('dev_charges')->default(0);
            $table->tinyInteger('allow_in_csc')->default(0);
            $table->tinyInteger('allow_in_lsc')->default(0);
            $table->decimal('size_in_marla', 10, 2)->default(0.00);
            $table->integer('old_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_cat');
    }
};
