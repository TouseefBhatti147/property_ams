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
        Schema::create('balloting', function (Blueprint $table) {
            $table->integer('balloting_id', true);
            $table->date('reg_date')->nullable();
            $table->date('balloting_date')->nullable();
            $table->string('description', 2000)->nullable();
            $table->integer('status')->default(0);
            $table->string('remarks', 2000)->nullable();
            $table->integer('project_id')->default(0);
            $table->string('code', 20)->nullable();
            $table->string('logo', 50)->nullable();
            $table->integer('balloting_for')->nullable()->default(0)->comment('1: balloting, 2: allocation');
            $table->boolean('publish_results')->nullable()->default(false)->comment('0=N/A
1=Offline
2=Online');
            $table->dateTime('results_date')->nullable();
            $table->tinyInteger('publish_for_emp')->nullable()->default(0);
            $table->integer('event_id')->nullable()->default(0);
            $table->boolean('show_in_portal')->nullable()->default(false)->comment('0=hide
1=show');
            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->longText('blocked_file_msg')->nullable();
            $table->date('ack_slip_start_date')->nullable();
            $table->date('ack_slip_end_date')->nullable();
            $table->date('allocation_start_date')->nullable();
            $table->date('allocation_end_date')->nullable();
            $table->string('sectors_included', 100)->nullable();
            $table->string('tags_included', 100)->nullable();
            $table->boolean('balloting_status')->nullable()->default(false)->comment('1= pending/in process
2= processed');
            $table->longText('allocation_message')->nullable();
            $table->integer('ack_slip_status')->default(0);
            $table->integer('old_id')->nullable();
            $table->string('plot_selection_notice', 100)->nullable();
            $table->string('plot_selection_user_guide', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting');
    }
};
