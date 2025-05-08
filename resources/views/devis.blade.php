@extends('layouts.app')

@section('content')
    <div class="container mt-12 mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="h-64 bg-gradient-to-r from-blue-600 to-purple-600 flex items-center justify-center">
                <h1 class="text-4xl font-bold text-white text-center">Demande de Devis</h1>
            </div>
            
            <div class="p-8">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="text-center mb-10">
                    <h2 class="text-2xl font-semibold text-blue-600">Vous souhaitez un devis personnalisé ?</h2>
                    <p class="text-gray-600 mt-2">Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais</p>
                    <a href="#devis-form" class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Demander un devis
                    </a>
                </div>

                <form id="devis-form" class="space-y-6" action="{{ route('devis.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom *</label>
                            <input type="text" id="nom" name="nom" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors duration-200">
                        </div>
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom *</label>
                            <input type="text" id="prenom" name="prenom" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors duration-200">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors duration-200">
                    </div>
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone *</label>
                        <input type="tel" id="telephone" name="telephone" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors duration-200">
                    </div>
                    <div>
                        <label for="type_projet" class="block text-sm font-medium text-gray-700 mb-1">Type de projet *</label>
                        <select id="type_projet" name="type_projet" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors duration-200">
                            <option value="construction">Construction</option>
                            <option value="renovation">Rénovation</option>
                            <option value="amenagement">Aménagement</option>
                        </select>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description du projet *</label>
                        <textarea id="description" name="description" rows="4" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-colors duration-200"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105">
                        Envoyer la demande
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection