<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            	->references('id')
                ->on('users');

            $table->string('place');
            $table->string('description');
            $table->string('building_num');
            $table->string('building_type');
            $table->string('building_ownership');
            $table->integar('building_rent');
            $table->string('location_N');
            $table->string('location_E');


            $table->string('bedroom');
            $table->string('kitchen');
            $table->string('bathroom');
            $table->string('store');
            $table->string('driverroom');
            $table->string('hall');
            $table->string('dining_room');
            $table->string('living_room');
            $table->string('roof');
            $table->string('annex');
            $table->string('outdoor');


            $table->string('room_number');
            $table->string('home_status');
            $table->string('home_quality');



            $table->string('home_status');
            $table->string('bank_name');
            $table->string('bank_account');



            $table->string('bedroom_evaluate');
            $table->string('kitchen_evaluate');
            $table->string('bathroom_evaluate');
            $table->string('store_evaluate');
            $table->string('driverroom_evaluate');
            $table->string('hall_evaluate');
            $table->string('dining_room_evaluate');
            $table->string('living_room_evaluate');
            $table->string('roof_evaluate');
            $table->string('annex_evaluate');
            $table->string('outdoor_evaluate');



            $table->string('evaluate_furniture');



            
            $table->string('washing_machine');
            $table->string('conditioner_1');//مكيف شبك
            $table->string('conditioner_2');//مكيف سبيليت
            $table->string('conditioner_3');//مكيف صحراوي
            $table->string('refrigerator');
            $table->string('fraser');
            $table->string('deep_freeze');
            $table->string('heater');
            $table->string('fan');
            $table->string('fireplace');
            $table->string('water_cooler');
            $table->string('');















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
        Schema::dropIfExists('location_infos');
    }
}
