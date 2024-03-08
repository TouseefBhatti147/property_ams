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
        Schema::create('property', function (Blueprint $table) {
            $table->integer('property_id', true);
            $table->integer('project_id');
            $table->integer('street_id');
            $table->integer('building_id')->nullable()->default(0);
            $table->integer('floor_id')->nullable()->default(0);
            $table->string('plot_no', 256);
            $table->string('plot_address', 256);
            $table->string('plot_dimensions', 256);
            $table->string('plot_size', 100);
            $table->dateTime('create_date');
            $table->dateTime('modify_date');
            $table->integer('category_id');
            $table->integer('block_id');
            $table->integer('associate_comp_mem_id')->default(0);
            $table->integer('sub_category_id');
            $table->integer('serial_no');
            $table->string('sft', 20);
            $table->integer('tag_id')->nullable();
            $table->integer('associate_company_id')->nullable();
            $table->integer('reservation_status');
            $table->integer('sub_status')->default(1);
            $table->integer('prev_sub_status')->nullable()->default(0);
            $table->string('status_remarks', 2000)->nullable();
            $table->string('reservation_remarks', 2000)->nullable();
            $table->bigInteger('random_id');
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->string('property_title', 2000);
            $table->integer('activation_status');
            $table->string('activation_remarks', 2000)->nullable();
            $table->string('image', 100)->nullable();
            $table->integer('design_id');
            $table->integer('choice_priority')->default(0);
            $table->string('choice_list', 500)->nullable();
            $table->integer('measurement')->default(0);
            $table->integer('is_odd_size')->default(0);
            $table->integer('base_status')->default(0);
            $table->integer('base_sub_status')->default(0);
            $table->string('row', 300);
            $table->string('street_name', 300)->nullable();
            $table->integer('street_so')->default(0);
            $table->bigInteger('size_categ_id')->default(0);
            $table->string('block_name', 300)->nullable();
            $table->integer('block_so')->default(0);
            $table->integer('sector_id')->default(0);
            $table->string('sector_name', 300)->nullable();
            $table->integer('sector_so')->default(0);
            $table->string('size_title', 300)->nullable();
            $table->string('size_specs', 300)->nullable();
            $table->integer('size_so')->default(0);
            $table->integer('pl_corner')->default(0);
            $table->integer('pl_facing_park')->default(0);
            $table->integer('pl_main_rd')->default(0);
            $table->integer('pl_boulevard')->default(0);
            $table->integer('pl_two_side_open')->default(0);
            $table->string('ms_no', 30)->nullable();
            $table->string('sub_status_title', 100)->nullable();
            $table->integer('property_type')->nullable()->default(0);
            $table->bigInteger('property_no')->nullable()->unique('property_no');
            $table->text('prev_location')->nullable();
            $table->text('tags')->nullable();
            $table->integer('bed_type')->default(0);
            $table->string('building_title', 500)->nullable();
            $table->string('floor_title', 200)->nullable();
            $table->string('bed_type_title', 200)->nullable();
            $table->tinyInteger('is_associate');
            $table->integer('association_type')->comment('not required, optional, required');
            $table->bigInteger('parent_id');
            $table->integer('floor_no');
            $table->text('unit_no')->nullable();
            $table->integer('balloting_id')->default(0);
            $table->integer('balloting_published')->default(0)->comment('unpublished/published/only for allocation staff');
            $table->integer('allocation_status')->default(0)->comment('hidden/visible/none');
            $table->date('allocation_date')->nullable();
            $table->integer('allocation_type')->default(0)->comment('through balloting/manual/member portal');
            $table->tinyInteger('feature_categ_id')->default(0);
            $table->decimal('open_area_measurement', 10)->default(0);
            $table->decimal('covered_area_measurement', 10)->default(0);
            $table->decimal('extra_covered_area_rate', 10)->default(0);
            $table->decimal('extra_land_rate', 10)->default(0);
            $table->decimal('extra_work', 10)->default(0);
            $table->integer('plot_id')->default(0);
            $table->integer('dev_charges_applied')->default(0);
            $table->integer('pl_charges_applied')->default(0);
            $table->integer('reserved_by')->default(0);
            $table->date('reservation_date')->nullable();
            $table->integer('reservation_checked')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
};
