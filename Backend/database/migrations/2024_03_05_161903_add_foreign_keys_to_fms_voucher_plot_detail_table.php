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
        Schema::table('fms_voucher_plot_detail', function (Blueprint $table) {
            $table->foreign(['voucher_id'], 'fms_voucher_plot_detail_ibfk_1')->references(['voucher_id'])->on('fms_voucher')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['plot_id'], 'fms_voucher_plot_detail_ibfk_2')->references(['id'])->on('plots')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fms_voucher_plot_detail', function (Blueprint $table) {
            $table->dropForeign('fms_voucher_plot_detail_ibfk_1');
            $table->dropForeign('fms_voucher_plot_detail_ibfk_2');
        });
    }
};
