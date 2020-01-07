<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sectors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->integer('sector_id');
            $table->timestamps();
        });

        Schema::table('user_sectors', function (Blueprint $table) { 
            $table->foreign('username')->references('username')->on('users');
            $table->foreign('sector_id')->references('sector_id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sectors');
    }
}
