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
            'sexe_plaignant' => 'required',
            'tel_plaignant' => 'required',
            'objet_plainte' => 'required',
            'nom_entreprise' => 'required',
            'secteur_activite' => 'required',
            'fonction' => 'required',
            'departement' => 'required',
            'date_depot' => 'required',
            'date_convocation' => 'required',
            'date_seance' => 'required',
        ]);

        $plainte = new Plainte();
        $plainte->prenom = $request->prenom;
        $plainte->nom = $request->nom;
        $plainte->sexe_plaignant = $request->sexe_plaignant;
        $plainte->tel_plaignant = $request->tel_plaignant;
        $plainte->objet_plainte = $request->objet_plainte;
        $plainte->nom_entreprise = $request->nom_entreprise;
        $plainte->secteur_activite = $request->secteur_activite;
        $plainte->fonction = $request->fonction;
        $plainte->departement = $request->departement;
        $plainte->date_depot = $request->date_depot;
        $plainte->date_convocation = $request->date_convocation;
        $plainte->date_seance = $request->date_seance;

        $plainte->save();

        return redirect('/plainte')->with('status', 'La plainte a été bien ajouté avec succés !');
    }

    public function update_plainte($id)
    {
        $plainte = Plainte::find($id);

        return view('plainte.update', compact('plainte'));
    }

    public function update_plainte_traitement(Request $request)
    {
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'sexe_plaignant' => 'required',
            'tel_plaignant' => 'required',
            'objet_plainte' => 'required',
            'nom_entreprise' => 'required',
            'secteur_activite' => 'required',
            'fonction' => 'required',
            'departement' => 'required',
            'date_depot' => 'required',
            'date_convocation' => 'required',
            'date_seance' => 'required',
        ]);

        $plainte = Plainte::find($request->id);
        $plainte->prenom = $request->prenom;
        $plainte->nom = $request->nom;
        $plainte->sexe_plaignant = $request->sexe_plaignant;
        $plainte->tel_plaignant = $request->tel_plaignant;
        $plainte->objet_plainte = $request->objet_plainte;
        $plainte->nom_entreprise = $request->nom_entreprise;
        $plainte->secteur_activite = $request->secteur_activite;
        $plainte->fonction = $request->fonction;
        $plainte->departement = $request->departement;
        $plainte->date_depot = $request->date_depot;
        $plainte->date_convocation = $request->date_convocation;
        $plainte->date_seance = $request->date_seance;

        $plainte->update();

        return redirect('/plainte')->with('status', 'La plainte a été bien modifiée avec succés !');
    }

    public function delete_plainte($id)
    {
        $plainte = Plainte::find($id);
        $plainte->delete();
        return redirect('/plainte')->with('status', 'La plainte a été bien supprimée avec succés !');
    }
}
