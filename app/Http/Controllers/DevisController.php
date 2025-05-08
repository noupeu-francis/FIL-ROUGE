<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;

class DevisController extends Controller
{
    public function index()
    {
        return view('devis');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'type_projet' => 'required|string|max:255',
            'description' => 'required|string',
            'conditions' => 'required'
        ], [
            'required' => 'Le champ :attribute est obligatoire.',
            'email' => 'L\'adresse email n\'est pas valide.',
            'max' => 'Le champ :attribute ne doit pas dépasser :max caractères.'
        ]);

        $devis = Devis::create($validatedData);

        return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès ! Nous vous contacterons dans les plus brefs délais.');
    }
}
