<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('studenten', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gebruikersnaam');
            $table->string('volledige_naam');
            $table->string('email');
            $table->integer('team');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studenten');
    }
};