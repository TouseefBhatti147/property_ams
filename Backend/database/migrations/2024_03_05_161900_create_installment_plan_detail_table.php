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
        Schema::create('installment_plan_detail', function (Blueprint $table) {
            $table->integer('detail_id', true);
            $table->integer('plan_id')->index('idx_planid');
            $table->string('installment_title', 200);
            $table->double('installment_amount');
            $table->integer('gap');
            $table->integer('gap_type');
            $table->integer('installment_no')->index('idx_installmentno');
            $table->decimal('percent_value', 10, 6)->default(0);
            $table->integer('installment_type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installment_plan_detail');
    }
};
