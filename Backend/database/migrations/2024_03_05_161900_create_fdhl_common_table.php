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
        Schema::create('fdhl_common', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('auto_calculate_receiptno');
            $table->date('overseas_launch_date');
            $table->date('local_launch_date');
            $table->decimal('payment_percent', 10, 8);
            $table->decimal('payment_fed', 10, 4);
            $table->string('member_portal_message1', 2000);
            $table->string('member_portal_message2', 2000);
            $table->decimal('surcharge_percent', 10, 5);
            $table->date('effective_date');
            $table->string('pricing_option_1', 1000)->comment('36 Months');
            $table->string('pricing_option_2', 1000)->comment('24 Months (5% Special Discount)');
            $table->integer('publish_balloting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fdhl_common');
    }
};
