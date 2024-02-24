<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function form_register(Request $request)
    {
        if($request->session()->get('client')){
            return redirect('/home')->with('status', 'Vous devez  vous déconnecter d\'abord !');
        }
        return view('register');
    }

    public function form_login(Request $request)
    {
        if($request->session()->get('client')){
            return redirect('/home')->with('status', 'Vous devez  vous déconnecter d\'abord !');
        }
        return view('login');
    }

    // Traitement du formulaire d'Inscription
    public function traitement_register(Request $request)
    {
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email|unique:clients',
            'poste' => 'required',
            'password' => 'required|min:8',
        ]);

        $client = new Client();
        $client->prenom = $request->input('prenom');
        $client->nom = $request->input('nom');
        $client->email = $request->input('email');
        $client->poste = $request->input('poste');
        $client->password = bcrypt($request->input('password'));
        $client-> save();

        return redirect('/register')->with('status', 'Création de compte réussi avec succés !');
    }

    // Traitement du formulaire de connection
    public function traitement_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        //Vérification de l'Email du client
        $client = client::where('email', $request->input('email'))->first();

        if($client) {
            if(Hash::check($request->input('password'), $client->password)){
                $request->session()->put('client', $client);
                return redirect('/home');
            }else{
                return back()->with('status', 'Identifiant ou mot de passe incorrecte');
            }
        }else {
            return back()->with('status', 'Désolé ! vous n\avez pas de compte');
        }
    }

    // Fonction de deconnection
    public function logout(Request $request)
    {
        $request->session()->forget('client');

        return redirect('/login')->with('status', 'Vous venez de vous déconnecter !');
    }
}
