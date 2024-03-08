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
        Schema::create('installpayment_trans_types_relations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('trans_type')->nullable();
            $table->string('trans_type_title')->nullable();
            $table->string('trans_sub_type')->nullable();
            $table->string('activation_status')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('groupping', 3000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installpayment_trans_types_relations');
    }
};
