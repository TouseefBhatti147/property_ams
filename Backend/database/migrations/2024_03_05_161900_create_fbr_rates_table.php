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
        Schema::create('fbr_rates', function (Blueprint $table) {
            $table->integer('fbr_rate_id', true);
            $table->integer('project_id')->default(0);
            $table->integer('size_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('fbr_rate_per_marla', 10, 0)->default(0);
            $table->decimal('fbr_rate_per_plot', 10, 0)->default(0);
            $table->decimal('filer_tax', 10, 0)->default(0);
            $table->decimal('non_filer_tax', 10, 0)->default(0);
            $table->decimal('non_resident_tax', 10, 0)->default(0);
            $table->integer('status')->default(0);
            $table->decimal('filer_tax_percent', 10)->default(0);
            $table->decimal('non_filer_tax_percent', 10)->default(0);
            $table->decimal('non_resident_tax_percent', 10)->default(0);
            $table->decimal('sales_tax_seller_filer', 10)->default(0);
            $table->decimal('sales_tax_seller_non_filer', 10)->default(0);
            $table->decimal('sales_tax_buyer_filer', 10)->default(0);
            $table->decimal('sales_tax_buyer_non_filer', 10)->default(0);
            $table->decimal('cvt_seller_filer', 10)->default(0);
            $table->decimal('cvt_seller_non_filer', 10)->default(0);
            $table->decimal('cvt_buyer_filer', 10)->default(0);
            $table->decimal('cvt_buyer_non_filer', 10)->default(0);
            $table->decimal('sales_tax_seller_non_res', 10)->default(0);
            $table->decimal('sales_tax_buyer_non_res', 10)->default(0);
            $table->decimal('cvt_seller_non_res', 10)->default(0);
            $table->decimal('cvt_buyer_non_res', 10)->default(0);
            $table->integer('calculation_mode')->default(0);
            $table->integer('files_reported_to_fbr')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fbr_rates');
    }
};
