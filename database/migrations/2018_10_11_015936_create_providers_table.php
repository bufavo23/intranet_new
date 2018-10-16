<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('description', 128);
            $table->integer('fee_basic');
            $table->integer('fee_bussinnes');
            $table->string('file', 128)->nullable();
            $table->enum('activo', ['ACTIVO','DESACTIVADO'])->default('ACTIVO');
            $table->integer('type_provider_id')->unsigned();
            $table->timestamps();
            

            //Relations
            $table->foreign('type_provider_id')->references('id')->on('type_providers')
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
        Schema::dropIfExists('providers');
    }
}
