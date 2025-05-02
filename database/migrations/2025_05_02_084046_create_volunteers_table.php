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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('postNom');
            $table->string('preNom');
            $table->string('nationalite');
            $table->string('sexe');
            $table->string('lieuNaiss');
            $table->string('dateNaiss');
            $table->string('avenue');
            $table->string('commune');
            $table->string('ville');
            $table->string('telephone');
            $table->string('email');
            $table->string('personneUrgence');
            $table->string('niveauEtude');
            $table->string('statut');
            $table->string('domaine');
            $table->string('fonction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
