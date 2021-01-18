<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratMagasinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat_magasin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contrat_id');
            $table->foreignId('magasin_id');
            $table->double('cm_ca_reel')->default(0.0);
            $table->double('cm_ca_remonte')->default(0.0);
            $table->double('cm_ca_1')->default(0.0);
            $table->double('cm_ca_2')->default(0.0);
            $table->double('cm_ca_3')->default(0.0);
            $table->double('cm_ca_4')->default(0.0);
            $table->double('cm_ca_5')->default(0.0);
            $table->double('cm_ca_6')->default(0.0);
            $table->double('cm_ca_7')->default(0.0);
            $table->double('cm_ca_8')->default(0.0);
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
        Schema::dropIfExists('contrat_magasin');
    }
}
