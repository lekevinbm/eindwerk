<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['wash','dry']);
            $table->string('code_name');
            $table->string('brand');
            $table->string('manufacturer_code');
            $table->text('description')->nullable();     
            $table->string('activation_status');
            $table->string('task_status')->default('unoccupied');
            $table->integer('location_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('location_id')->references('id')
            ->on('locations')
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
        Schema::dropIfExists('devices');
    }
}
