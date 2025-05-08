<?php

namespace App\Http\Controllers;  // Remove the "Auth" from namespace

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function index()
    {
        return view('devis');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            'telephone' => 'required|string|max:20',
            'message' => 'required|string',
            'type' => 'required|in:particulier,entreprise',
            'confirmation' => 'required|accepted'
        ]);

        // Add your logic to store the devis here
        
        return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès.');
    }
}
