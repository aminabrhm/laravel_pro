<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');
            $table->string('first_name');//الاسم الأول
            $table->string('second_name');// الإسم الثاني
            $table->string('third_name');// الإسم الثالث
            $table->string('family_name');// اسم العائلة
            $table->string('gender');// الجنس
            $table->integer('national_id');//الهوية الوطنية
            $table->string('place_national');//جهة الاصدار
            $table->date('date_national');//تاريخ اصدار الهوية الوطنية
            $table->date('date_ex_national');//تاريخ انتهاء الهوية الوطنية
            $table->string('place_birth');//مكان الميلاد
            $table->date('date_birth');//تاريخ الميلاد
            $table->integer('passport_number');//رقم جواز السفر
            $table->string('passport_place');//مكان اصدار الجواز
            $table->date('passport_date');//تاريخ اصدار الجواز
            $table->integer('license_number');//رخصة
            $table->string('license_place');//مكان اصدار الرخصة
            $table->date('date_ex_license');//انتهاء الرخصة
            $table->string('job');//الوظيفة
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
        Schema::dropIfExists('beneficiary_infos');
    }
}
