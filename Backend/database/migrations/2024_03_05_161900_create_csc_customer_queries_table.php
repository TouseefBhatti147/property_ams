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
        Schema::create('csc_customer_queries', function (Blueprint $table) {
            $table->increments('query_id')->comment('Query');
            $table->integer('customer_id')->index('idx_customer_id')->comment('Customer');
            $table->text('customer_more_info')->nullable()->comment('Customer More Info');
            $table->text('info_requested')->nullable()->comment('Information Requested');
            $table->integer('created_by')->comment('Created by User');
            $table->longText('info_shared_by_sms')->nullable()->comment('Info Shared through SMS');
            $table->longText('info_shared_by_email')->nullable()->comment('Info Shared through Email');
            $table->boolean('status')->nullable()->default(true)->comment('Status');
            $table->dateTime('created_at')->nullable()->useCurrent()->comment('Created Date');
            $table->dateTime('updated_at')->nullable()->useCurrent()->comment('Updated Date');

            $table->unique(['query_id'], 'query_id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csc_customer_queries');
    }
};
