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
        Schema::create('qridentity_members', function (Blueprint $table) {
            $table->bigInteger('member_id', true);
            $table->string('member_name', 300);
            $table->string('father_name', 300);
            $table->string('cnic', 30);
            $table->string('contact_no', 50);
            $table->string('email', 200);
            $table->string('address', 1000);
            $table->string('designation', 300);
            $table->string('section', 300);
            $table->string('picture', 300);
            $table->integer('status');
            $table->integer('category');
            $table->date('valid_upto');
            $table->integer('contact_person_id');
            $table->string('project_name', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qridentity_members');
    }
};
