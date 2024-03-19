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
        Schema::create('plaintes', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('sexe_plaignant');
            $table->string('tel_plaignant');
            $table->text('objet_plainte');
            $table->text('nom_entreprise');
            $table->text('secteur_activite');
            $table->text('fonction');
            $table->text('departement');
            $table->date('date_depot');
            $table->date('date_seance');
            $table->date('date_reglement');
            $table->string('pj_plainte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
