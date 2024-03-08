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
        Schema::create('ms_nos', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('project_id')->index('fk_project_id')->comment('Project');
            $table->integer('property_type_id')->index('fk_property_type_id')->comment('Property Type');
            $table->integer('ms')->nullable();
            $table->string('ms_no')->comment('MS No.');
            $table->string('comp_ms_no')->nullable()->comment('Complete MS No.');
            $table->string('uniq_ms')->nullable()->unique('unique_ms_UNIQUE');
            $table->integer('created_by')->nullable()->default(0)->comment('Created by');
            $table->integer('updated_by')->nullable()->default(0)->comment('Updated by');
            $table->integer('reserved_by')->nullable()->default(0);
            $table->dateTime('reserved_at')->nullable();
            $table->boolean('status')->nullable()->default(false)->comment('0= Open
1= Active
2= Reserved');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');
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
        Schema::dropIfExists('ms_nos');
    }
};
