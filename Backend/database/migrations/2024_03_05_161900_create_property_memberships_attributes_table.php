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
        Schema::create('property_memberships_attributes', function (Blueprint $table) {
            $table->bigIncrements('attribute_id')->unique('attribute_id_UNIQUE');
            $table->integer('ms_id')->default(0);
            $table->integer('attribute_type')->default(0)->comment('100 =Status on-Hold
101\'=Status un-Hold');
            $table->bigInteger('value')->nullable()->default(0);
            $table->string('value_text')->nullable();
            $table->dateTime('value_date')->nullable();
            $table->integer('tag')->nullable()->default(0);
            $table->bigInteger('ref_id')->nullable()->default(0);
            $table->dateTime('reg_date')->nullable();
            $table->integer('reg_by')->nullable()->default(0);
            $table->text('reg_remarks')->nullable();
            $table->dateTime('print_date')->nullable();
            $table->integer('printed_by')->nullable()->default(0);

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_memberships_attributes');
    }
};
