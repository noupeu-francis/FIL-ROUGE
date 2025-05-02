<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCORS - Demande de Devis</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2c3e50',
                        secondary: '#e74c3c',
                        accent: '#3498db',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    
<nav class="navbar fixed top-0 w-full bg-black text-white z-50 transition-all duration-300 py-3">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <a class="navbar-brand flex items-center" href="#">
                    <img src="{{ asset('assets/img/logo.PNG') }}" alt="INCORS" class="h-14">
                </a>
                
                <button class="lg:hidden text-white focus:outline-none" id="mobile-menu-button">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                
                <div class="hidden lg:flex items-center space-x-2" id="navbar-menu">
                    <ul class="flex space-x-6">
                        <li><a href="#accueil" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Accueil</a></li>
                        <li><a href="#services" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Services</a></li>
                        <li><a href="#produits" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Produits</a></li>
                        <li><a href="#about" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">À propos</a></li>
                        <li><a href="#contact" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Contact</a></li>
                    </ul>
                    <div class="flex ml-6 space-x-3">
                        <a href="{{ route('login') }}" class="btn-connexion bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full transition-all duration-300 transform hover:scale-105">Connexion</a>
                        <a href="{{ route('register') }}" class="btn-inscription bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition-all duration-300 transform hover:scale-105">Inscription</a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div class="lg:hidden hidden bg-dark py-4" id="mobile-menu">
                <ul class="flex flex-col space-y-4">
                    <li><a href="#accueil" class="block text-white hover:text-primary transition-colors duration-300">Accueil</a></li>
                    <li><a href="#services" class="block text-white hover:text-primary transition-colors duration-300">Services</a></li>
                    <li><a href="#produits" class="block text-white hover:text-primary transition-colors duration-300">Produits</a></li>
                    <li><a href="#about" class="block text-white hover:text-primary transition-colors duration-300">À propos</a></li>
                    <li><a href="#contact" class="block text-white hover:text-primary transition-colors duration-300">Contact</a></li>
                    <li class="pt-4">
                        <div class="flex space-x-3">
                            <a href="{{ route('login') }}" class="btn-connexion bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full transition-all duration-300 w-full text-center">Connexion</a>
                            <a href="{{ route('register') }}" class="btn-inscription bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full transition-all duration-300 w-full text-center">Inscription</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-12 mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <!-- Image Header -->
            <div class="h-64 bg-gradient-to-r from-primary to-accent flex items-center justify-center">
                <h1 class="text-4xl font-bold text-white text-center">Demande de Devis</h1>
            </div>
            
            <!-- Form Section -->
            <div class="p-8">
                <div class="text-center mb-10">
                    <h2 class="text-2xl font-semibold text-primary">Vous souhaitez un devis personnalisé ?</h2>
                    <p class="text-gray-600 mt-2">Remplissez ce formulaire et nous vous répondrons dans les plus brefs délais</p>
                </div>

                <form class="space-y-6">
                    <!-- Row 1 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input type="email" id="email" required 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-transparent transition-all" 
                                   placeholder="votre@email.com">
                        </div>
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom *</label>
                            <input type="text" id="nom" required 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-transparent transition-all" 
                                   placeholder="Votre nom">
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom *</label>
                            <input type="text" id="prenom" required 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-transparent transition-all" 
                                   placeholder="Votre prénom">
                        </div>
                        <div>
                            <label for="profession" class="block text-sm font-medium text-gray-700 mb-1">Profession</label>
                            <input type="text" id="profession" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-transparent transition-all" 
                                   placeholder="Votre profession">
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone *</label>
                        <input type="tel" id="telephone" required 
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-transparent transition-all" 
                               placeholder="Votre numéro de téléphone">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
                        <textarea id="message" rows="4" required 
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-transparent transition-all" 
                                  placeholder="Décrivez votre projet ou demande..."></textarea>
                    </div>

                    <!-- Radio Buttons -->
                    <div class="space-y-2">
                        <p class="text-sm font-medium text-gray-700">Vous êtes : *</p>
                        <div class="flex flex-wrap gap-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="type" value="particulier" checked 
                                       class="h-5 w-5 text-accent focus:ring-accent border-gray-300">
                                <span class="ml-2 text-gray-700">Particulier</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="type" value="entreprise" 
                                       class="h-5 w-5 text-accent focus:ring-accent border-gray-300">
                                <span class="ml-2 text-gray-700">Entreprise</span>
                            </label>
                        </div>
                    </div>

                    <!-- Checkbox -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="confirmation" name="confirmation" type="checkbox" required 
                                   class="h-5 w-5 text-accent focus:ring-accent border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="confirmation" class="font-medium text-gray-700">
                                Je confirme l'exactitude des informations fournies et accepte la politique de confidentialité *
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" 
                                class="w-full md:w-auto px-8 py-3 bg-primary hover:bg-opacity-90 text-white font-medium rounded-lg shadow-md transition-all transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Envoyer la demande
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Social Buttons -->
    <div class="fixed right-6 top-1/2 transform -translate-y-1/2 flex flex-col space-y-4 z-10">
        <a href="#" class="w-12 h-12 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center text-white shadow-lg transition-transform hover:scale-110">
            <i class="fab fa-facebook-f text-xl"></i>
        </a>
        <a href="#" class="w-12 h-12 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center text-white shadow-lg transition-transform hover:scale-110">
            <i class="fab fa-whatsapp text-xl"></i>
        </a>
        <a href="#" class="w-12 h-12 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center text-white shadow-lg transition-transform hover:scale-110">
            <i class="fab fa-instagram text-xl"></i>
        </a>
    </div>
    
    <footer class="bg-black text-white pt-16 pb-8 relative">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-accent"></div>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="footer-col">
                    <img src="{{ asset('assets/img/logo.PNG') }}" alt="INCORS" class="h-16 mb-4">
                    <p class="text-gray-400 mb-4">Votre partenaire de confiance dans la construction et la rénovation depuis 2008.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3 class="text-xl font-bold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#accueil" class="text-gray-400 hover:text-white transition-colors duration-300">Accueil</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors duration-300">Services</a></li>
                        <li><a href="#produits" class="text-gray-400 hover:text-white transition-colors duration-300">Produits</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors duration-300">À propos</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3 class="text-xl font-bold mb-4">Contactez-nous</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-primary"></i>
                            <span>123 Rue de la Construction, 75000 Paris</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-primary"></i>
                            <span>+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-primary"></i>
                            <span>contact@incors.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock mt-1 mr-3 text-primary"></i>
                            <span>Lun-Ven: 9h-18h</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500">
                <p>&copy; 2023 INCORS. Tous droits réservés.</p>
                <div class="flex justify-center space-x-4 mt-2">
                    <a href="#" class="text-gray-500 hover:text-gray-300 transition-colors duration-300 text-sm">Mentions légales</a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 transition-colors duration-300 text-sm">Politique de confidentialité</a>
                    <a href="#" class="text-gray-500 hover:text-gray-300 transition-colors duration-300 text-sm">Conditions générales</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>