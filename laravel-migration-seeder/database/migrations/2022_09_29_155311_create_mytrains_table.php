<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMytrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seed_trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',100);
            $table->string('stazione_partenza',100);
            $table->string('stazione_arrivo',100);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno',100);
            $table->tinyInteger('numero_carrozze',false,true);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
        Schema::dropIfExists('mytrains');
    }
}
