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
        Schema::table('user_devices', function (Blueprint $table) {
            $table->string('region', 1000)->nullable()->after('device');
            $table->dateTime('requested_at')->nullable()->after('region');
            $table->string('requester_comments', 500)->nullable()->after('requested_at');
            $table->dateTime('activated_at')->nullable()->after('requester_comments');
            $table->integer('activated_by')->default(0)->after('activated_at');
            $table->tinyInteger('is_active')->default(0)->after('activated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_devices', function (Blueprint $table) {
            $table->dropColumn(['region', 'requested_at', 'requester_comments', 'activated_at', 'activated_by', 'is_active']);
        });
    }
};
