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
        Schema::create('balloting_ack_slip', function (Blueprint $table) {
            $table->bigInteger('slip_id', true);
            $table->integer('plot_id')->default(0)->index('plot_id');
            $table->integer('ms_id')->default(0);
            $table->integer('member_id')->default(0);
            $table->date('reg_date')->nullable();
            $table->integer('dues_cleared')->default(0);
            $table->integer('map_location_marked')->default(0);
            $table->string('slip_qr_code', 1000)->nullable();
            $table->string('serial_no', 20)->nullable();
            $table->string('tag_wise_serial', 5)->nullable();
            $table->string('remarks', 2000)->nullable();
            $table->date('print_date')->nullable();
            $table->integer('ballot_id')->default(0);
            $table->integer('tag_id')->default(0);
            $table->integer('is_printed')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('printed_by')->nullable();
            $table->integer('prev_member_id')->nullable()->default(0);
            $table->integer('edit_required')->nullable();
            $table->integer('confirmation_required')->nullable();
            $table->integer('edit_request_user')->nullable();
            $table->dateTime('edit_request_date')->nullable();
            $table->dateTime('confirmation_date')->nullable();
            $table->string('confirmation_remarks', 2000)->nullable();
            $table->string('edit_request_remarks', 2000)->nullable()->comment('1= Normal , 2=auto generate');
            $table->integer('status_on_request')->nullable();
            $table->string('extra_serials', 1000)->nullable();
            $table->integer('slip_criteria')->nullable()->default(0);
            $table->boolean('create_method')->nullable()->default(true);
            $table->integer('tag_changed')->default(0);
            $table->integer('slip_for')->default(0)->comment('1: balloting, 2: allocation');
            $table->integer('status')->nullable()->default(1);
            $table->text('status_remarks')->nullable();
            $table->boolean('balloting_on_hold')->nullable()->default(false);
            $table->integer('temp_ballot_id')->default(0);

            $table->index(['slip_id'], 'slip_id');
            $table->timestamps(); // Add timestamps

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_ack_slip');
    }
};
