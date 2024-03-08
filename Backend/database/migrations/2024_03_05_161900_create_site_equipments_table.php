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
        Schema::create('site_equipments', function (Blueprint $table) {
            $table->increments('equipment_id')->unique('equipment_id_UNIQUE')->comment('ID');
            $table->integer('equipment_category_id')->comment('Category');
            $table->integer('equipment_subcategory_id')->comment('Sub-Category');
            $table->integer('equipment_type_id')->comment('Type');
            $table->integer('project_id')->comment('Project');
            $table->string('title')->comment('Title');
            $table->string('short')->nullable()->comment('Code');
            $table->boolean('condition')->nullable()->default(true)->comment('Condition');
            $table->boolean('asset_type')->nullable()->default(true)->comment('Asset Type');
            $table->date('joining_date')->nullable();
            $table->longText('remarks')->nullable();
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
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
        Schema::dropIfExists('site_equipments');
    }
};
