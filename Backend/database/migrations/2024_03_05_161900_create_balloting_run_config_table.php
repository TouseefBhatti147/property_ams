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
        Schema::create('balloting_run_config', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('balloting_id');
            $table->integer('project_id');
            $table->boolean('status')->nullable()->default(true);
            $table->string('property_types', 100)->nullable();
            $table->string('sizes')->nullable();
            $table->string('tags')->nullable();
            $table->string('sectors')->nullable();
            $table->string('sector_blocks')->nullable();
            $table->date('booking_date_from')->nullable();
            $table->date('booking_date_to')->nullable();
            $table->decimal('visible_paid_per', 11)->nullable();
            $table->decimal('visible_overdue_per', 11)->nullable();
            $table->decimal('hidden_paid_per', 11)->nullable();
            $table->decimal('paid_per_not_included', 11)->nullable();
            $table->integer('fetch_records')->nullable();
            $table->integer('no_of_balloted')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->longText('history')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balloting_run_config');
    }
};
