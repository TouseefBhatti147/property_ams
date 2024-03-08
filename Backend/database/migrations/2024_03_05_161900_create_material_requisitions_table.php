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
        Schema::create('material_requisitions', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('s_no', 100);
            $table->integer('project_id')->nullable()->default(0)->index('idx_project_id');
            $table->integer('material_category_id')->index('idx_cat_id');
            $table->integer('material_type_id')->index('idx_type_id');
            $table->string('description')->nullable();
            $table->decimal('quantity', 18);
            $table->string('location')->nullable();
            $table->string('ref_no')->nullable();
            $table->integer('requested_by')->nullable();
            $table->dateTime('requested_date')->nullable();
            $table->dateTime('required_by_date')->nullable();
            $table->decimal('quantity_supplied', 18)->nullable();
            $table->integer('supplied_by')->nullable();
            $table->string('supplied_date')->nullable();
            $table->mediumText('supplier_remarks')->nullable();
            $table->mediumText('management_comments')->nullable();
            $table->string('viewed_by')->nullable()->comment('comma separated user ids');
            $table->boolean('status')->nullable()->default(true)->comment('1= Requested
2= Material Supplied
3= Rejected
4= Hold');
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
        Schema::dropIfExists('material_requisitions');
    }
};
