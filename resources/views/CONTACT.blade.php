<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Notre Entreprise</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .custom-shape-divider-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .custom-shape-divider-bottom svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .gradient-text {
            background: linear-gradient(45deg, #3B82F6, #2563EB);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, 15px); }
            100% { transform: translate(0, -0px); }
        }
    </style>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
                    <li><a href="{{ route('accueil') }}" class="block text-white hover:text-primary transition-colors duration-300">Accueil</a></li>
                    <li><a href="{{ route('services') }}" class="block text-white hover:text-primary transition-colors duration-300">Services</a></li>
                    <li><a href="{{ route('produits') }}" class="block text-white hover:text-primary transition-colors duration-300">Produits</a></li>
                    <li><a href="{{ route('about') }}" class="block text-white hover:text-primary transition-colors duration-300">À propos</a></li>
                    <li><a href="{{ route('contact') }}" class="block text-white hover:text-primary transition-colors duration-300">Contact</a></li>
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
<nav class="bg-white shadow p-4 flex gap-6">
    <a href="{{ route('accueil') }}" ="text-indigo-600 hover:underline">Accueil</a>
    <a href="{{ route('services') }}" class="text-indigo-600 hover:underline">service</a>
<a href="{{ route('produits') }}" class="text-indigo-600 hover:underline">produit</a>
  </nav>
    <div class="min-h-screen relative">
        <!-- Hero Section -->
        <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 h-96">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto px-4 h-full flex items-center justify-center relative z-10">
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-white mb-4" data-aos="fade-down">Contactez-nous</h1>
                    <p class="text-xl text-blue-100" data-aos="fade-up" data-aos-delay="200">
                        Notre équipe est là pour vous aider
                    </p>
                </div>
            </div>
            <div class="custom-shape-divider-bottom">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-50"></path>
                </svg>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="container mx-auto px-4 -mt-32 relative z-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Contact Info -->
                <div class="bg-white rounded-xl shadow-xl p-8" data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-8 gradient-text">Nos Coordonnées</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-100 rounded-full p-3">
                                <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-1">Adresse</h3>
                                <p class="text-gray-600">123 Rue du Commerce<br>75001 Paris, France</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-100 rounded-full p-3">
                                <i class="fas fa-phone text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-1">Téléphone</h3>
                                <p class="text-gray-600">+33 1 23 45 67 89</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-100 rounded-full p-3">
                                <i class="fas fa-envelope text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-1">Email</h3>
                                <p class="text-gray-600">contact@entreprise.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h3 class="text-xl font-semibold mb-4">Horaires d'ouverture</h3>
                        <div class="space-y-2 text-gray-600">
                            <p>Lundi - Vendredi: 9h00 - 18h00</p>
                            <p>Samedi: 9h00 - 12h00</p>
                            <p>Dimanche: Fermé</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-xl p-8" data-aos="fade-left">
                    <h2 class="text-3xl font-bold mb-8 gradient-text">Envoyez-nous un message</h2>
                    
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nom complet</label>
                            <input type="text" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Sujet</label>
                            <input type="text" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent" required></textarea>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-800 text-white font-semibold py-3 rounded-lg hover:opacity-90 transition-opacity">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="max-w-6xl mx-auto mt-16 rounded-xl overflow-hidden shadow-xl" data-aos="fade-up">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.3470195!3d48.8534951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDUxJzEyLjYiTiAywrAyMCc0OS4zIkU!5e0!3m2!1sfr!2sfr!4v1635959145784!5m2!1sfr!2sfr"
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
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

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>