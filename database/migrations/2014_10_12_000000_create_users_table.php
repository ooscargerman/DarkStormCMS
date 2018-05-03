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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company_id');
            $table->string('code');
            $table->integer('active');
            $table->string('register_ip');
            $table->string('last_ip');
            $table->integer('role');
            $table->string('session_id');
            $table->string('clan_id');
            $table->bigInteger('uridium');
            $table->bigInteger('credits');
            $table->bigInteger('level');
            $table->bigInteger('experience');
            $table->bigInteger('honor');
            $table->bigInteger('ammunition');

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
