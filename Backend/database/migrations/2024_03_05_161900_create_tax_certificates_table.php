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
        Schema::create('tax_certificates', function (Blueprint $table) {
            $table->bigInteger('certificate_id', true);
            $table->text('installments');
            $table->bigInteger('member_id');
            $table->dateTime('reg_date');
            $table->integer('generated_by')->comment('member/user');
            $table->integer('user_id');
            $table->integer('certificate_type')->comment('provisional/final');
            $table->integer('criteria')->comment('receipt/file/fiscal year');
            $table->integer('for_member')->comment('for multiple files/ for single file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_certificates');
    }
};
