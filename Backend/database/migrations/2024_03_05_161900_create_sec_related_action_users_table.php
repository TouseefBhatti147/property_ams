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
        Schema::create('sec_related_action_users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('related_action_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('status')->default(1);
            $table->string('allowed_projects')->nullable();
            $table->text('project_names')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_related_action_users');
    }
};
