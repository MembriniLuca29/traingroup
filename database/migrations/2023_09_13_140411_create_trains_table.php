<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            /*
            azienda                 stringa NOT NULL
            stazione di partenza    stringa NOT NULL
            stazione di arrivo      stringa NOT NULL
            orario di partenza      time NOT NULL
            orario di arrivo        time NOT NULL
            codice treno            smallint NOT NULL
            numero carrozze         small int NULL
            in orario               tiny int -> booleano    DEFAULT TRUE
            cancellato              tiny int -> booleano    DEFAULT FALSE
            */

            $table->id();
            $table->string('azienda', 64);
            $table->string('stazione_partenza', 64);
            $table->string('stazione_arrivo', 64);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 25);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
