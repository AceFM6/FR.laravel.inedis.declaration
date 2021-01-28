<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegleContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regle_contrats', function (Blueprint $table) {
            $table->foreignId('contrat_id')->unique();
            $table->string('rce_libelle_1')->default('');
            $table->string('rce_libelle_2')->default('');
            $table->string('rce_libelle_3')->default('');
            $table->string('rce_libelle_4')->default('');
            $table->string('rce_libelle_5')->default('');
            $table->string('rce_libelle_6')->default('');
            $table->string('rce_libelle_7')->default('');
            $table->string('rce_libelle_8')->default('');
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
        Schema::dropIfExists('regle_contrats');
    }
}
