<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->float('price');
            $table->dateTime('device_started_on')->nullable();
            $table->dateTime('device_ended_on')->nullable();
            $table->integer('device_id')->unsigned()->nullable();
            $table->integer('reservation_before_dry_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('washing_program_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('device_id')->references('id')
            ->on('devices')
            ->onDelete('cascade');
            
            $table->foreign('user_id')->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('reservation_before_dry_id')->references('id')
            ->on('reservations')
            ->onDelete('cascade');
            
            $table->foreign('washing_program_id')->references('id')
            ->on('washing_programs')
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
        Schema::dropIfExists('reservations');
    }
}
