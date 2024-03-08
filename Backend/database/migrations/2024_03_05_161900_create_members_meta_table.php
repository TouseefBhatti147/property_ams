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
        Schema::create('members_meta', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->integer('member_id')->index('idx_member_id');
            $table->tinyInteger('meta_key')->comment('1=NICOP Front, 2=NICOP Back');
            $table->string('meta_value');
            $table->boolean('status')->nullable()->default(true)->comment('0= Inactive, 1=Active');
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_meta');
    }
};
