<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->string('last_name_f', 250);
            $table->string('last_name_m', 250);
            $table->string('rut', 250);
            $table->string('pasaporte', 250);           
            $table->date('birth_date');   
            $table->string('phone', 250);
            $table->string('email', 250);
            $table->string('address', 250);
            $table->string('comuna', 250);
            $table->string('city', 250);
            $table->string('country', 250);

            $table->timestamps();

            $table->integer('client_id')->unsigned();

            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers');
    }
}
