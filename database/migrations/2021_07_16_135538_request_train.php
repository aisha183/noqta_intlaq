<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestTrain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RequestTrain', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('CompanyId')->constrained('companyInfo');
            $table->foreignId('TrainingId')->constrained('trainer');
            $table->string('first_name');
            $table->string('secund_name');
            $table->string('last_name');
            $table->string('phhone_no');
            $table->string('email');
            $table->string('University');
            $table->string('college');
            $table->string('Specialization');
            $table->boolean('training_type');
            $table->string('Field_training');
            $table->string('Experience_level');
            $table->string('request_Text');
            $table->rememberToken();
            $table->timestamps(date('yy/mm/dd'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
