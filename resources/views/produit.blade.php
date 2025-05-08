<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCORS - Nos Produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0d6efd',
                        'primary-dark': '#0b5ed7',
                    },
                    backgroundImage: {
                        'tiles-pattern': "linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/images/tiles-bg.jpg')",
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
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
                        <li><a href="{{ route('accueil') }}" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Services</a></li>
                        <li><a href="{{ route('produits') }}" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Produits</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">À propos</a></li>
                        <li><a href="{{ route('contact') }}" class="nav-link text-white hover:text-primary transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Contact</a></li>
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

    <!-- Header -->
    <header class="bg-gray-800 bg-cover bg-center flex items-center justify-center h-96 mt-16" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/img/P6.jpg')">
        <div class="text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Nos Produits</h1>
            <p class="text-xl text-gray-300">Découvrez notre sélection de carrelages haut de gamme</p>
        </div>
    </header>

    <!-- Navigation des catégories -->
    <div class="bg-gray-100 py-6 mb-10 sticky top-16 z-40 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-2 md:gap-4">
                <a href="#carrelage-sol" class="bg-primary text-white px-6 py-2 rounded-full font-medium transition-colors">Carrelage Sol</a>
                <a href="#carrelage-mural" class="bg-white text-gray-800 px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition-colors">Carrelage Mural</a>
                <a href="#mosaique" class="bg-white text-gray-800 px-6 py-2 rounded-full font-medium hover:bg-gray-200 transition-colors">Mosaïque</a>
            </div>
        </div>
    </div>
J
    <!-- Carrelage Sol -->
    <section id="carrelage-sol" class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 relative pb-2">
                Carrelage Sol
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary rounded-full"></span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 6; $i++)
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('assets/imgM1.JPG') }}"alt="Carrelage Sol {{$i}}" class="w-full h-80 object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-semibold mb-2">Carrelage Sol {{$i}}</h4>
                        <p class="text-primary font-bold text-xl mb-4">49.99€/m²</p>
                        
                        <!-- Description déroulante -->
                        <div class="mb-4">
                            <button class="flex justify-between items-center w-full text-left text-gray-700 mb-2" onclick="toggleDescription(this)">
                                <span class="font-medium">Description du produit</span>
                                <svg class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="description-content hidden transition-all duration-300">
                                <p class="text-gray-700 mb-3">Carrelage grès cérame haute résistance, parfait pour un usage intensif. Disponible en plusieurs dimensions.</p>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Résistant aux chocs
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Antidérapant
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Facile d'entretien
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <button class="w-full bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-md transition-colors">
                            Acheter
                        </button>
                        
                        <!-- Ajouter le modal à la fin du body, avant les scripts -->
                        <!-- Modal de commande -->
                        <div id="orderModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
                            <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-2xl font-bold text-gray-900">Commander</h3>
                                    <button onclick="closeOrderModal()" class="text-gray-400 hover:text-gray-600">
                                        <i class="fas fa-times text-xl"></i>
                                    </button>
                                </div>
                        
                                <form action="{{ route('order.submit') }}" method="POST" class="space-y-4">
                                    @csrf
                                    <input type="hidden" name="product_id" id="productId">
                                    
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Nom complet</label>
                                        <input type="text" name="name" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                        
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Email</label>
                                        <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                        
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Téléphone</label>
                                        <input type="tel" name="phone" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                        
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Quantité (m²)</label>
                                        <input type="number" name="quantity" min="1" value="1" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                        
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-2">Adresse de livraison</label>
                                        <textarea name="address" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" rows="3"></textarea>
                                    </div>
                        
                                    <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-semibold py-3 rounded-lg transition-colors duration-300">
                                        Confirmer la commande
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Ajouter ce script avant la fermeture du body -->
                        <script>
                            function openOrderModal(productId) {
                                document.getElementById('orderModal').classList.remove('hidden');
                                document.getElementById('orderModal').classList.add('flex');
                                document.getElementById('productId').value = productId;
                                document.body.style.overflow = 'hidden';
                            }
                        
                            function closeOrderModal() {
                                document.getElementById('orderModal').classList.add('hidden');
                                document.getElementById('orderModal').classList.remove('flex');
                                document.body.style.overflow = 'auto';
                            }
                        
                            // Fermer le modal si on clique en dehors
                            document.getElementById('orderModal').addEventListener('click', function(e) {
                                if (e.target === this) {
                                    closeOrderModal();
                                }
                            });
                        </script>
                    </div>
                </div>
                @endfor
            </div>
            <!-- Ajout du bouton Voir plus -->
            <div class="text-center mt-12">
                <a href="/categorie/sol" class="inline-flex items-center px-8 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-full transition-colors duration-300">
                    Voir plus 
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Carrelage Mural -->
        <section id="carrelage-mural" class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 relative pb-2">
                    Carrelage Mural
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary rounded-full"></span>
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <div class="relative">
                            <img src="{{ asset('assets/img/MO1'.$i.'.JPG') }}" alt="Carrelage Mural {{$i}}" class="w-full h-80 object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold mb-2">Carrelage Mural {{$i}}</h4>
                            <p class="text-primary font-bold text-xl mb-4">39.99€/m²</p>
                            
                            <!-- Description déroulante -->
                            <div class="mb-4">
                                <p class="text-gray-700 mb-3">Carrelage mural moderne avec finition mate ou brillante. Idéal pour salle de bain et cuisine.</p>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Design contemporain
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Résistant à l'humidité
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Facile à nettoyer
                                    </li>
                                </ul>
                            </div>
                            
                            <button class="w-full bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-md transition-colors">
                                Acheter
                            </button>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="text-center mt-12">
                    <a href="/categorie/sol" class="inline-flex items-center px-8 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-full transition-colors duration-300">
                        Voir plus 
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    <!-- Mosaïque -->
    <section id="mosaique" class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 relative pb-2">
                Mosaïque
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-primary rounded-full"></span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 6; $i++)
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="relative">
                        <img src="/images/mosaique-{{$i}}.jpg" alt="Mosaïque {{$i}}" class="w-full h-80 object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-semibold mb-2">Mosaïque {{$i}}</h4>
                        <p class="text-primary font-bold text-xl mb-4">59.99€/m²</p>
                        
                        <!-- Description déroulante -->
                        <div class="mb-4">
                            <p class="text-gray-700 mb-3">Mosaïque haut de gamme pour une décoration unique. Parfaite pour créer des accents décoratifs.</p>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Motifs exclusifs
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Installation facile
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Haute qualité
                                </li>
                            </ul>
                        </div>
                        
                        <button class="w-full bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-md transition-colors">
                            Acheter
                        </button>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-12">
                <a href="/categorie/sol" class="inline-flex items-center px-8 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-full transition-colors duration-300">
                    Voir plus 
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
                            <span>123 Rue de la Construction,AKWA</span>
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

    <!-- Scripts -->
    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('button.md\\:hidden');
            const mobileMenu = document.querySelector('.md\\:hidden + div');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 120,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
    <script>
        function toggleDescription(button) {
            const content = button.nextElementSibling;
            const arrow = button.querySelector('svg');
            
            content.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
            
            // Animation de la hauteur
            if (content.classList.contains('hidden')) {
                content.style.maxHeight = '0';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        }
    </script>
</body>
</html>