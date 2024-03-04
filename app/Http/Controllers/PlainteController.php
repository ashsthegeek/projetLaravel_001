<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plainte;

class PlainteController extends Controller
{
    public function liste_plainte()
    {
        $plaintes = Plainte::all();
        return view('plainte.liste', compact('plaintes'));
    }

    public function ajouter_plainte()
    {
        return view('plainte.ajouter');
    }

    public function ajouter_plainte_traitement(Request $request)
    {
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'genre_plaignant' => 'required',
            'tel_plaignant' => 'required',
            'objet_plainte' => 'required',
            'nom_entreprise' => 'required',
            'fonction' => 'required',
            'date_depot' => 'required',
            'date_convocation' => 'required',
            'date_seance' => 'required',
            'pj_plainte' => 'nullable',
        ]);

        $plainte = new Plainte();
        $plainte->prenom = $request->prenom;
        $plainte->nom = $request->nom;
        $plainte->genre_plaignant = $request->genre_plaignant;
        $plainte->tel_plaignant = $request->tel_plaignant;
        $plainte->objet_plainte = $request->objet_plainte;
        $plainte->nom_entreprise = $request->nom_entreprise;
        $plainte->fonction = $request->fonction;
        $plainte->date_depot = $request->date_depot;
        $plainte->date_convocation = $request->date_convocation;
        $plainte->date_seance = $request->date_seance;
        $plainte->pj_plainte = $request->pj_plainte;

        $plainte->save();

        return redirect('/ajouter')->with('status', 'La plainte a été bien ajouté avec succés !');
    }
}
