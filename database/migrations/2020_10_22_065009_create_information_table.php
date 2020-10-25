<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');

            $table->string('heart_disease');
            $table->string('diabetes');
            $table->string('blood_pressure');
            $table->string('physical_disability');


            $table->string('social_status');
            $table->string('family_number');
            $table->string('wife_number');
            $table->string('male_number');
            $table->string('female_number');
            $table->string('other_person');
            $table->string('primary_school');
            $table->string('middle_school');
            $table->string('high_school');
            $table->string('university');
            $table->string('graduated');
            $table->string('who_spend');
            $table->integer('monthly_salary');
            $table->integer('monthly_salary_s');
            $table->integer('retirment_salary');
            $table->integer('social_security');
            $table->integer('commercial');
            $table->integer('subsidy');
            $table->integer('other');
            $table->string('patient_name');
            $table->string('patient_gender');
            $table->string('related');
            $table->string('disease_name');
            $table->date('disease_date');
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
        Schema::dropIfExists('information');
    }
}
