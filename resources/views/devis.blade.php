@extends('layouts.app')

@section('content')
<!-- Add Tailwind CSS CDN -->
<link href="https://cdn.tailwindcss.com" rel="stylesheet">
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-gray-100 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8"></div>
        <!-- En-tête -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Demande de Devis</h1>
            <p class="text-lg text-gray-600">Obtenez une estimation gratuite pour votre projet</p>
        </div>
        <!-- Carte principale -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Barre de progression -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-6">
                <div class="flex justify-between items-center text-white">
                    <div class="flex items-center">
                        <span class="h-8 w-8 rounded-full bg-white text-blue-600 flex items-center justify-center font-bold">1</span>
                        <span class="ml-2">Informations</span>
                    </div>
                    <div class="h-1 w-16 bg-white/30"></div>
                    <div class="flex items-center">
                        <span class="h-8 w-8 rounded-full bg-white/20 text-white flex items-center justify-center">2</span>
                        <span class="ml-2">Projet</span>
                    </div>
                    <div class="h-1 w-16 bg-white/30"></div>
                    <div class="flex items-center">
                        <span class="h-8 w-8 rounded-full bg-white/20 text-white flex items-center justify-center">3</span>
                        <span class="ml-2">Validation</span>
                    </div>
                </div>
            </div>
            <!-- Formulaire -->
            <form class="p-6 space-y-8" action="{{ route('devis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Section 1: Informations personnelles -->
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Informations personnelles</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nom *</label>
                            <input type="text" name="nom" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Prénom *</label>
                            <input type="text" name="prenom" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" name="email" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone *</label>
                            <input type="tel" name="telephone" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </div>
                <!-- Section 2: Détails du projet -->
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Détails du projet</h2>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Type de projet *</label>
                            <select name="type_projet" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Sélectionnez un type</option>
                                <option value="construction">Construction</option>
                                <option value="renovation">Rénovation</option>
                                <option value="amenagement">Aménagement</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description du projet *</label>
                            <textarea name="description" rows="4" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Section 3: Budget et délais -->
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Budget et délais</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Délai souhaité</label>
                            <select name="delai" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
@endsection