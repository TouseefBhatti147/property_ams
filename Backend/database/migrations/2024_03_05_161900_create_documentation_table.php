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
        Schema::create('documentation', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('parent_id')->nullable()->default(0);
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('module_name')->nullable();
            $table->string('table_name')->nullable();
            $table->string('controller_name')->nullable();
            $table->string('model_name')->nullable();
            $table->string('url')->nullable();
            $table->string('author')->nullable();
            $table->string('attachment_1')->nullable();
            $table->string('attachment_2')->nullable();
            $table->string('attachment_3')->nullable();
            $table->boolean('status')->nullable()->default(true)->comment('1=Active
2=Deprecated
3=Trashed');
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentation');
    }
};
