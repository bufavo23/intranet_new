<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user', 128); //id vendedora
            $table->string('name', 128);
            $table->string('last_name', 128);
            $table->string('rut', 128);
            $table->string('email')->unique();
            $table->string('birthday_date');
            $table->string('image', 128);
            $table->string('facebook', 250);
            $table->string('twiter', 250);
            $table->string('linkedin', 250);
            $table->string('instagram', 250);
            $table->string('about_me', 250);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
