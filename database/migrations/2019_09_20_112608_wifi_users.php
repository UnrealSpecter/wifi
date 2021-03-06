<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WifiUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wifi_users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->required();
            $table->integer('msisdn')->required();

            $table->boolean('consent1')->required();
            $table->boolean('consent2')->required();

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
        Schema::dropIfExists('wifi_users');
    }
}
