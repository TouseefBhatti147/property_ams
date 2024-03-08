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
         Schema::create('plots', function (Blueprint $table) {
             $table->id();
             $table->string('ms_no', 30)->nullable();
             $table->integer('msno')->nullable()->index();
             $table->string('comp_ms_no', 50)->nullable();
             $table->integer('curr_ms')->default(0);
             $table->integer('project_id')->default(0);
             $table->integer('size2')->default(0);
             $table->integer('ms_id')->default(0);
             $table->integer('application_id')->default(0);
             $table->integer('activation_status')->default(0);
             $table->integer('allocation_status')->default(1);
             $table->dateTime('create_date')->default(now());
             $table->integer('tag1_id')->default(0);
             $table->integer('tag2_id')->default(0);
             $table->integer('tag3_id')->default(0);
             $table->integer('record_room_id')->default(0);
             $table->string('street_id', 11)->default(0);
             $table->string('type', 256)->default('file');
             $table->string('plot_detail_address', 256)->nullable();
             $table->string('plot_size', 256)->nullable();
             $table->integer('installment')->default(0);
             $table->string('price', 255)->nullable();
             $table->bigInteger('additional_price')->default(0);
             $table->dateTime('modify_date')->default(now())->nullable();
             $table->string('com_res', 123)->nullable();
             $table->integer('category_id')->default(0);
             $table->string('block_id', 200)->default(0);
             $table->string('image', 100)->nullable();
             $table->integer('shap_id')->default(0);
             $table->string('cstatus', 200)->nullable();
             $table->string('status', 200)->default('requested');
             $table->string('fstatus', 255)->nullable();
             $table->string('rstatus', 255)->nullable();
             $table->string('bstatus', 256)->nullable();
             $table->string('bid', 255)->nullable();
             $table->string('atype', 256)->nullable()->comment('property_against (land, installments)');
             $table->string('rownumber', 123)->nullable();
             $table->integer('parent_id')->default(0)->comment('0: land, else building of parent_id');
             $table->string('activation_remarks', 1000)->nullable();
             $table->decimal('refund_amount', 10)->nullable();
             $table->string('activation_fin_remarks', 1000)->nullable();
             $table->string('activation_ver_remarks', 1000)->nullable();
             $table->integer('parent_file_id')->nullable();
             $table->string('plot_no', 50)->nullable();
             $table->integer('reserved_plot_id')->nullable();
             $table->integer('is_reserved')->nullable();
             $table->integer('in_process_ms_id')->default(0);
             $table->integer('prev_ms_id')->default(0);
             $table->integer('include_dev_charges')->default(0);
             // Add more columns based on your schema
             $table->timestamps();
         });
     }
 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plots');
    }
};
