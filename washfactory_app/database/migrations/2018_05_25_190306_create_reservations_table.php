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
            $table->integer('device_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('washing_program_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('user_id')->references('id')
            ->on('users')
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
