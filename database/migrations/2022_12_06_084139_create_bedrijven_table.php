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
        Schema::create('bedrijven', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('bedrijf_naam');
            $table->string('bedrijf_email');
            $table->string('bedrijf_telefoon');
            $table->string('bedrijf_website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bedrijven');
    }
};