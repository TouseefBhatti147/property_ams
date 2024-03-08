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
        Schema::create('tracking', function (Blueprint $table) {
            $table->increments('id')->unique('id_UNIQUE');
            $table->string('tracking_no')->nullable()->index('idx_tracking_no');
            $table->integer('document_no')->nullable()->index('idx_ms_id');
            $table->string('form_no')->nullable();
            $table->integer('tracking_type')->nullable()->comment('            \'1\' => "Membership: Booking",
            \'2\' => "Membership: Transfer",
            \'3\' => "Membership: Cancellation",
            \'4\' => "Membership: Merge",
            
            \'11\' => "Instrument: Cash",
            \'12\' => "Instrument: Cheque/PO",
            \'13\' => "Instrument: Online Transfer (UBL)",            
            \'16\' => "Instrument: Funds Transfer"');
            $table->integer('sales_center_id')->nullable();
            $table->integer('project_id')->nullable();
            $table->integer('property_type_id')->nullable();
            $table->integer('detail_id')->nullable();
            $table->integer('step_no')->nullable()->index('idx_stepno');
            $table->boolean('is_last_step')->nullable()->default(false);
            $table->string('step_title')->nullable();
            $table->string('step_description')->nullable();
            $table->string('step_department')->nullable();
            $table->integer('department_category_id')->nullable()->default(0);
            $table->string('gap')->nullable();
            $table->date('due_date')->nullable();
            $table->dateTime('forwarded_date')->nullable();
            $table->integer('forwarded_by')->nullable();
            $table->dateTime('submitted_date')->nullable();
            $table->integer('submitted_by')->nullable();
            $table->dateTime('received_date')->nullable();
            $table->integer('received_by')->nullable();
            $table->longText('comments')->nullable();
            $table->boolean('status')->nullable()->default(true)->index('idx_status')->comment('1= Pending, 2=Current, 3=Done , 4=On Hold , 5=Cancelled');
            $table->boolean('current_status')->nullable()->default(true)->comment('1=Pending, 2=Received, 3=Submitted, 4=Forwarded');
            $table->integer('delay')->nullable()->default(0);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
            $table->date('rev_due_date')->nullable();
            $table->boolean('file_tagged')->nullable()->default(false);
            $table->boolean('returned')->nullable()->default(false)->comment('2 = returned');
            $table->dateTime('returned_at')->nullable();
            $table->integer('returned_from_step_no')->nullable()->default(0);
            $table->integer('return_delay_plus')->default(0);
            $table->integer('return_delay_minus')->default(0);

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking');
    }
};
