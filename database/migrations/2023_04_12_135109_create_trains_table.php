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
    { //tabella trains creata
        Schema::create('trains', function (Blueprint $table) {
            $table->id(); //qui sotto aggiungo specifiche tabella
            $table->string('azienda',100);
            $table->string('stazione_partenza',50);
            $table->string('stazione_arrivo',50);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('codice_treno',5);
            $table->tinyInteger('numero_carrozze')->unsigned()->default(1);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->string('img', 100)->default('../images/regulartrain.jpg');

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
        Schema::dropIfExists('trains');
    }
};
