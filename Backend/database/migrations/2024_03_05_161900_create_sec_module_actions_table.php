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
        Schema::create('sec_module_actions', function (Blueprint $table) {
            $table->bigInteger('action_id', true);
            $table->integer('controller_id')->index('module_id');
            $table->string('action_code', 100);
            $table->string('action_title', 300);
            $table->integer('action_so');
            $table->string('action_detail', 1000)->nullable();
            $table->integer('for_admin');
            $table->string('view_name', 300);
            $table->integer('activation_status');
            $table->integer('purpose')->default(0);
            $table->integer('dept_id')->default(0);
            $table->string('action_path')->nullable();
            $table->integer('purpose_choices')->default(0);
            $table->text('edit_request_action')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_module_actions');
    }
};
