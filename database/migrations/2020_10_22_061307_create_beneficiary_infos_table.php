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
            $table->string('name')->unique();
            $table->string('gender');
            $table->integer('national_id');
            $table->string('place_national');
            $table->date('date_national');
            $table->date('date_ex_national');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->integer('passport_number');
            $table->string('passport_place');
            $table->date('passport_date');
            $table->integer('license_number');
            $table->string('license_place');
            $table->date('date_ex_license');
            $table->string('job');
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
