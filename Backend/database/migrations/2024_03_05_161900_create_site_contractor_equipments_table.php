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
        Schema::create('site_contractor_equipments', function (Blueprint $table) {
            $table->increments('contractor_equipment_id')->unique('contractor_equipment_id_UNIQUE')->comment('Contractor Equipment ID');
            $table->integer('contractor_id')->comment('Contractor ');
            $table->integer('equipment_category_id')->nullable()->comment('Equipment Category');
            $table->integer('equipment_subcategory_id')->nullable()->comment('Equipment Subcategory');
            $table->integer('equipment_type_id')->nullable()->comment('Equipment Type');
            $table->string('title')->comment('Title');
            $table->string('short')->nullable()->comment('Code');
            $table->integer('quantity')->nullable()->comment('Quantity');
            $table->integer('ordering')->nullable()->comment('Ordering');
            $table->boolean('is_active')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_contractor_equipments');
    }
};
