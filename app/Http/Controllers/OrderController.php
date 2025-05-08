<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'quantity' => 'required|numeric|min:1',
            'address' => 'required|string'
        ]);

        // Here you can add your order processing logic
        // For example, saving to database, sending notifications, etc.

        return redirect()->back()->with('success', 'Votre commande a été soumise avec succès');
    }
}