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
        Schema::create('site_cont_equipment_deployments', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('project_id')->comment('Project');
            $table->integer('division_id')->comment('Divion/Location');
            $table->integer('user_id')->comment('Site Incharge');
            $table->integer('incharge_team_id')->nullable()->default(0)->comment('Incharge Team');
            $table->integer('contractor_id')->comment('Contractor');
            $table->integer('contractor_equipment_id')->comment('Equipment');
            $table->integer('quantity')->comment('Quantity');
            $table->longText('remarks')->nullable()->comment('Remarks');
            $table->integer('ordering')->nullable()->default(1)->comment('Ordering');
            $table->boolean('working_status')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Deployment Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Deployment Updated Date');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_cont_equipment_deployments');
    }
};
