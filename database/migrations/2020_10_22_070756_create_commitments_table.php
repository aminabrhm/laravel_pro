<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');

            $table->integer('rent_home');
            $table->integer('electricity_bill');
            $table->integer('water_bill');
            $table->integer('monthly_fees');
            $table->integer('monthly_fees_bank');
            $table->integer('debts');
            $table->integer('monthly_fees_eco_bank');
            $table->integer('personal_debts');
            $table->integer('hospital');
            $table->integer('maintenance');
            $table->integer('gas');
            $table->integer('transfer');
            $table->integer('supplies');
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
        Schema::dropIfExists('commitments');
    }
}
