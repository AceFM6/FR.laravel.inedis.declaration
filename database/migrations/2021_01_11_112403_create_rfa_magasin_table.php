<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfaMagasinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfa_magasin', function (Blueprint $table) {
            $table->bigInteger('mag_code');
            $table->string('mag_nom');
            $table->timestamps();
            $table->string('adr_ville');
            $table->integer('ens_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rfa_magasin');
    }
}
