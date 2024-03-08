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
        Schema::create('property_allocations', function (Blueprint $table) {
            $table->bigInteger('allocation_id', true);
            $table->integer('plot_id');
            $table->integer('property_id');
            $table->integer('status')->default(0);
            $table->date('reg_date');
            $table->string('remarks', 2000);
            $table->integer('created_by');
            $table->dateTime('creation_date');
            $table->integer('updated_by');
            $table->dateTime('updated_on');
            $table->integer('balloting_id');
            $table->integer('ms_id');
            $table->integer('deallocated_by');
            $table->date('deallocated_on');
            $table->string('deallocation_remarks', 2000)->nullable();
            $table->integer('type')->comment('manual/through balloting');
            $table->integer('allocation_for');
            $table->integer('building_id');
            $table->integer('unblocked_by')->default(0);
            $table->dateTime('unblocked_on')->useCurrent();
            $table->string('unblock_remarks', 2000)->nullable();
            $table->integer('unblock_printed')->default(0);
            $table->integer('is_hidden')->default(0);
            $table->integer('temp_status')->nullable()->default(0);
            $table->integer('temp_property_id')->nullable()->default(0);
            $table->integer('project_id')->nullable()->default(0);
            $table->integer('tag1_id')->nullable()->default(0);
            $table->integer('sector_id')->nullable()->default(0);
            $table->integer('size_id')->nullable()->default(0);
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
        Schema::dropIfExists('property_allocations');
    }
};
