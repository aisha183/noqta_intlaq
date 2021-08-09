<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChanceCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChanceCompany', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->foreignId('CompanyId')->constrained('companyInfo');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('NO-trainers');
            $table->string('Field_training_need');
            $table->string('AdText');
            $table->boolean('status');
            $table->rememberToken();
            $table->timestamps();
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
