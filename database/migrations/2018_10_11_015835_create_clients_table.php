<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('last_name_f', 128);
            $table->string('last_name_m', 128);
            $table->string('rut', 128);
            $table->string('contact', 128);
            $table->string('phone', 128);
            $table->string('email', 128);
            $table->string('giro', 250);
            $table->string('address', 250);
            $table->string('comuna', 250);
            $table->string('city', 250);
            $table->string('country', 250);
            $table->timestamps();
            $table->enum('tipo_cliente', ['PARTICULAR','EMPRESA', 'EXTRANJERO']);
            $table->integer('user_id')->unsigned();

            //Relations
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('clients');
    }
}
