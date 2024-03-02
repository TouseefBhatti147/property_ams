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
        Schema::create('size_cat_acconconfig', function (Blueprint $table) {
            $table->bigIncrements('config_id');
            $table->integer('size_id')->default(0);
            $table->integer('project_id')->default(0);
            $table->string('acc_code', 20)->nullable()->collation('utf16_unicode_ci');
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
        Schema::dropIfExists('size_cat_acconconfig');

    }
};
