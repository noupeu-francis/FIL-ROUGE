<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'quantity' => 'required|numeric|min:1',
            'address' => 'required|string|max:500'
        ]);

        // Créer la commande
        $order = Order::create([
            'product_id' => $validated['product_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'quantity' => $validated['quantity'],
            'address' => $validated['address'],
            'status' => 'pending'
        ]);

        // Envoyer un email de confirmation
        try {
            Mail::to($validated['email'])->send(new OrderConfirmation($order));
        } catch (\Exception $e) {
            // Log l'erreur mais continue l'exécution
            \Log::error('Failed to send order confirmation email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Votre commande a été enregistrée avec succès ! Un email de confirmation vous a été envoyé.');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('orders.index', compact('orders'));
    }
}