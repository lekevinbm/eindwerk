<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_charges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('method');
            $table->float('amount');
            $table->integer('user_id')->unsigned();
            $table->timestamps();            
            $table->softDeletes();

            $table->foreign('user_id')->references('id')
            ->on('users')
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
        Schema::dropIfExists('credit_charges');
    }
}
