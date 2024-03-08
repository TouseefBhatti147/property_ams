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
        Schema::create('ms_action_policies', function (Blueprint $table) {
            $table->integer('policy_id', true);
            $table->string('title', 500)->nullable();
            $table->date('wef_date')->nullable();
            $table->date('reg_date')->nullable();
            $table->integer('policy_for')->default(0);
            $table->text('remarks')->nullable();
            $table->integer('status')->default(0);
            $table->text('remarks2')->nullable();
            $table->text('script')->nullable();
            $table->text('script_description')->nullable();
            $table->integer('script_type')->default(0)->comment('query/function');
            $table->integer('project_id')->default(0);
            $table->integer('is_default')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_action_policies');
    }
};
