<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('subtitle', 250);
            $table->text('news');
            $table->enum('type', ['INFORMATIVA','URGENTE', 'COMISIONES', 'REGULACIONES', 'REPORTES'])->default('INFORMATIVA');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('provider_id')->unsigned();

            //Relations
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('provider_id')->references('id')->on('providers')
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
        Schema::dropIfExists('news');
    }
}
