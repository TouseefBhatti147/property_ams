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
        Schema::create('sec_roles', function (Blueprint $table) {
            $table->integer('role_id', true);
            $table->integer('sec_role_type_id');
            $table->integer('sec_role_category_id');
            $table->string('role_name', 300);
            $table->integer('role_so');
            $table->integer('activation_status');
            $table->integer('controller_id')->nullable()->default(0);
            $table->string('role_depts')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_roles');
    }
};
