<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteer = Volunteer::all();

        return view('partials.Volunteer')->with('volunteers', $volunteer);
    }

    public function show($id)
    {

    }

    public function addVolunteer()
    {
        return  view('partials.AddVolunteer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
        ]);

        $volunteer = new Volunteer();

        $volunteer->nom = $request->nom;
        $volunteer->postNom = $request->input('postNom');
        $volunteer->prenom = $request->input('prenom');
        $volunteer->nationalite = $request->input('nationalite');
        $volunteer->sexe = $request->input('sexe');
        $volunteer->lieuNaiss = $request->input('lieuNaiss');
        $volunteer->dateNaiss = $request->input('dateNaiss');
        $volunteer->avenue = $request->input('avenue');
        $volunteer->commune = $request->input('commune');
        $volunteer->telephone = $request->input('telephone');
        $volunteer->email = $request->input('email');
        $volunteer->personneUrgence = $request->input('personneUrgence');
        $volunteer->niveauEtude = $request->input('niveauEtude');
        $volunteer->statut = $request->input('statut');
        $volunteer->domaine = $request->input('domaine');
        $volunteer->fonction = $request->input('fonction');

        $volunteer->save();

        return redirect()->route('site.home')
                     ->with('success', 'Enregistrement effectué avec succès !');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string',
            'postNom' => 'required|string',
            'prenom' => 'required|string',
            'nationalite' => 'required|string',
            'sexe' => 'required|string',
            'lieuNaiss' => 'required|string',
            'dateNaiss' => 'required|string',
            'avenue' => 'required|string',
            'commune' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'personneUrgence' => 'required|string',
            'niveauEtude' => 'required|string',
            'statut' => 'required|string',
            'domaine' => 'required|string',
            'fonction' => 'required|string'
        ]);

        $volunteer = Volunteer::findOrfail($id);

        $volunteer->nom = $request->nom;
        $volunteer->postNom = $request->input('postNom');
        $volunteer->prenom = $request->input('prenom');
        $volunteer->nationalite = $request->input('nationalite');
        $volunteer->sexe = $request->input('sexe');
        $volunteer->lieuNaiss = $request->input('lieuNaiss');
        $volunteer->dateNaiss = $request->input('dateNaiss');
        $volunteer->avenue = $request->input('avenue');
        $volunteer->commune = $request->input('commune');
        $volunteer->phone = $request->input('phone');
        $volunteer->email = $request->input('email');
        $volunteer->personneUrgence = $request->input('personneUrgence');
        $volunteer->niveauEtude = $request->input('niveauEtude');
        $volunteer->statut = $request->input('statut');
        $volunteer->domaine = $request->input('domaine');
        $volunteer->fonction = $request->input('fonction');

        $volunteer->save();

        return redirect()->route('partials.Volunteer')
                     ->with('success', 'Membre ajouté avec succès !')
                     ->with('volunteers', $volunteer);

    }

    public function destroy($id)
    {
        $volunteer = Volunteer::find($id);
        $volunteer->delete();

        return redirect()->back()->with('success', 'membre supprimé avec succès');
    }
}
