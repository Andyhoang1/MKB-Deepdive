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
        Schema::create('verzoeken', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('verzoek_titel');
            $table->string('verzoek_omschrijving');
            $table->string('verzoek_status');
            $table->text('verzoek_body');
            $table->integer('verzoek_beloning');
            $table->integer('bedrijf_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verzoeken');
    }
};