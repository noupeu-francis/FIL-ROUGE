<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCORS - Nos Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0d6efd',
                        secondary: '#6c757d',
                        dark: '#212529',
                        light: '#f8f9fa',
                        accent: '#ff6b6b',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-8px)' }
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-shadow {
                text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
            }
            .text-shadow-md {
                text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            }
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="navbar fixed top-0 w-full bg-dark text-white z-50 transition-all duration-300 py-3">
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

    <!-- Header -->
    <header class="relative h-96 flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/img/zz.jpg')">
        <div class="container mt-12 mx-auto px-4 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-shadow-md animate-fade-in">Nos Services</h1>
            <p class="text-xl md:text-2xl text-shadow animate-fade-in delay-100">Des solutions complètes pour tous vos projets de construction</p>
        </div>
    </header>

    <!-- Services principaux -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300 group-hover:bg-primary/20">
                            <i class="fas fa-home text-3xl text-primary transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-4">Construction Neuve</h3>
                        <p class="text-secondary mb-6">Construction de maisons individuelles et bâtiments commerciaux selon vos spécifications.</p>
                        <ul class="space-y-2 text-left">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Plans personnalisés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Matériaux de qualité</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Respect des normes</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300 group-hover:bg-primary/20">
                            <i class="fas fa-tools text-3xl text-primary transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-4">Rénovation</h3>
                        <p class="text-secondary mb-6">Rénovation complète ou partielle de votre espace avec des finitions haut de gamme.</p>
                        <ul class="space-y-2 text-left">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Modernisation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Optimisation d'espace</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Isolation performante</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="p-8 text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300 group-hover:bg-primary/20">
                            <i class="fas fa-pencil-ruler text-3xl text-primary transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-4">Design & Conception</h3>
                        <p class="text-secondary mb-6">Services de conception et de planification architecturale pour votre projet.</p>
                        <ul class="space-y-2 text-left">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Design moderne</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Plans détaillés</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Conseils experts</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus de travail -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-dark mb-16">Notre Processus de Travail</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Étape 1 -->
                <div class="text-center p-6 rounded-xl bg-light transition-all duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h4 class="text-xl font-bold text-dark mb-3">vente</h4>
                    <p class="text-secondary">des produits de qualité qui n'attende que vous dans nos magazins</p>
                </div>
                
                <!-- Étape 2 -->
                <div class="text-center p-6 rounded-xl bg-light transition-all duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h4 class="text-xl font-bold text-dark mb-3">Livraison</h4>
                    <p class="text-secondary">une livraison garantir </p>
                </div>
                
                <!-- Étape 3 -->
                <div class="text-center p-6 rounded-xl bg-light transition-all duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                    <h4 class="text-xl font-bold text-dark mb-3">relation client et technicien</h4>
                    <p class="text-secondary">nous vous proposons des techniciens qualifiés pour mener à bien votre projet</p>
                </div>
                
                <!-- Étape 4 -->
                <div class="text-center p-6 rounded-xl bg-light transition-all duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">4</div>
                    <h4 class="text-xl font-bold text-dark mb-3">production de devis</h4>
                    <p class="text-secondary">nous vous proposons des devis à la demande avec une bonne précision</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Caractéristiques -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-dark mb-16">Pourquoi Nous Choisir</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Caractéristique 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-2">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                        <i class="fas fa-medal text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-dark mb-3">Qualité Premium</h4>
                    <p class="text-secondary">Matériaux et finitions de haute qualité pour des résultats durables.</p>
                </div>
                
                <!-- Caractéristique 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-2">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-dark mb-3">Respect des Délais</h4>
                    <p class="text-secondary">Engagement strict sur les délais de livraison convenus.</p>
                </div>
                
                <!-- Caractéristique 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-2">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4 text-primary">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-dark mb-3">Équipe Experte</h4>
                    <p class="text-secondary">Professionnels qualifiés et expérimentés dans leur domaine.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à commencer votre projet?</h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">Contactez-nous dès aujourd'hui pour discuter de vos besoins en construction ou rénovation.</p>
            <a href="/contact" class="inline-block bg-white text-primary font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                Nous contacter
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-16 pb-8">
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
                    <h3 class="text-xl font-bold mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors duration-300">Accueil</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors duration-300">Services</a></li>
                        <li><a href="/produits" class="text-gray-400 hover:text-white transition-colors duration-300">Produits</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors duration-300">À propos</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
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

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
                navbar.classList.add('py-2');
            } else {
                navbar.classList.remove('shadow-lg');
                navbar.classList.remove('py-2');
            }
        });
    </script>
</body>
</html>