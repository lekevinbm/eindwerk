<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmptyDeviceDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empty_device_demands', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('next_user_will_empty_device')->nullable();
            $table->float('charges_for_applicant')->nullable();
            $table->enum('kind_of_demand',['empty_in_basket','empty_in_dryer']);
            $table->integer('reservation_of_applicant_id')->unsigned();
            $table->integer('next_reservation_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('reservation_of_applicant_id')->references('id')
            ->on('reservations')
            ->onDelete('cascade');

            $table->foreign('next_reservation_id')->references('id')
            ->on('reservations')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empty_device_demands');
    }
}
