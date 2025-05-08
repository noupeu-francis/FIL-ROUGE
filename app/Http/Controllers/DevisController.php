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
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'type_projet' => 'required',
            'description' => 'required'
        ]);

        Devis::create($validatedData);

        return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès !');
    }
}
