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
        Schema::create('material_requisitions_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('requisition_id')->nullable()->index('idx_requisition_id');
            $table->integer('project_id')->nullable()->index('idx_project_id');
            $table->integer('material_category_id')->nullable()->index('idx_material_cat_id');
            $table->integer('material_type_id')->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('ref_no')->nullable();
            $table->decimal('quantity', 18)->nullable();
            $table->integer('requested_by')->nullable();
            $table->dateTime('requested_date')->nullable();
            $table->decimal('quantity_supplied', 18)->nullable();
            $table->integer('supplied_by')->nullable();
            $table->dateTime('supplied_date')->nullable();
            $table->longText('supplier_remarks')->nullable();
            $table->longText('management_comments')->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->integer('rejected_by')->nullable()->comment('rejected / deleted by user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_requisitions_history');
    }
};
