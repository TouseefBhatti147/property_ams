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
        Schema::create('installment_plan_master', function (Blueprint $table) {
            $table->integer('plan_id', true);
            $table->integer('project_id')->nullable()->index('idx_projectid');
            $table->integer('category_id')->index('idx_sizeid')->comment('size_id from size_cat table');
            $table->string('description', 200)->nullable();
            $table->double('total_amount');
            $table->double('discount')->nullable();
            $table->integer('no_of_installments')->nullable();
            $table->integer('plan_land_type')->nullable()->default(0);
            $table->integer('plan_development_type')->nullable();
            $table->integer('for_member')->nullable();
            $table->integer('plan_status')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('tag_id')->nullable()->default(0)->index('idx_tag1');
            $table->integer('revision_no')->nullable()->default(0);
            $table->integer('no_of_months')->nullable()->default(0);
            $table->integer('plan_month_gap')->nullable()->comment('monthly/quarterly');
            $table->integer('down_payment')->nullable()->comment('percent');
            $table->integer('plan_for')->nullable()->comment('plot/building');
            $table->integer('for_dealer')->default(0);
            $table->integer('saleable_units')->nullable()->default(1);
            $table->bigInteger('discount_on_booking')->default(0);
            $table->boolean('is_new')->default(false);
            $table->boolean('sold_out')->default(false);
            $table->string('description_for_portal', 500)->nullable();
            $table->string('sold_out_text')->nullable();
            $table->string('dev_cost_text')->nullable();
            $table->double('gross_total_amount')->nullable();
            $table->boolean('is_default')->nullable()->default(false);
            $table->integer('is_advance')->default(0);
            $table->string('tags', 250)->nullable();
            $table->integer('size_category_id')->default(0);
            $table->integer('sft_rate')->default(0);
            $table->decimal('open_parking_percent', 10)->default(0);
            $table->decimal('covered_parking_percent', 10)->default(0);
            $table->integer('building_id')->default(0);
            $table->integer('for_allocation')->default(0);
            $table->text('allocation_plan_title')->nullable();
            $table->tinyInteger('for_conversion')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installment_plan_master');
    }
};
