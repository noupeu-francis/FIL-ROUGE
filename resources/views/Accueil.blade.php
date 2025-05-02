<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCORS - Construction et Rénovation</title>
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

    <!-- Hero Section -->
    <section id="accueil" class="hero-section relative h-screen min-h-[600px] flex items-center justify-center bg-cover bg-center bg-fixed" style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('assets/img/11.jpg')">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 z-0"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 text-shadow-md animate-fade-in">Bienvenue chez INCORS</h1>
            <p class="text-xl md:text-2xl text-white mb-8 text-shadow animate-fade-in delay-100">Votre partenaire de confiance pour des constructions durables</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 animate-fade-in delay-200">
                <a href="#contact" class="bg-primary hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">Contactez-nous</a>
                <a href="#services" class="bg-transparent border-2 border-white hover:bg-white/10 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105">Nos Services</a>
            </div>
        </div>
    </section>
 
    <!-- Services Section -->
    <section id="services" class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Nos Services</h2>
                <p class="text-lg text-secondary max-w-2xl mx-auto">Des solutions complètes pour tous vos projets de construction et rénovation</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="p-8 text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300 group-hover:bg-primary/20">
                            <i class="fas fa-home text-3xl text-primary transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Construction</h3>
                        <p class="text-secondary">Services de construction résidentielle et commerciale sur mesure, de la conception à la réalisation.</p>
                        <a href="#" class="inline-block mt-4 text-primary font-medium hover:text-blue-700 transition-colors duration-300">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="p-8 text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300 group-hover:bg-primary/20">
                            <i class="fas fa-tools text-3xl text-primary transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Rénovation</h3>
                        <p class="text-secondary">Rénovation complète et partielle de bâtiments, préservation du patrimoine avec techniques modernes.</p>
                        <a href="#" class="inline-block mt-4 text-primary font-medium hover:text-blue-700 transition-colors duration-300">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="p-8 text-center">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 transition-all duration-300 group-hover:bg-primary/20">
                            <i class="fas fa-pencil-ruler text-3xl text-primary transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Design Intérieur</h3>
                        <p class="text-secondary">Conception architecturale innovante et planification spatiale optimale pour vos projets.</p>
                        <a href="#" class="inline-block mt-4 text-primary font-medium hover:text-blue-700 transition-colors duration-300">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10 animate-fade-in">
                    <img src="{{ asset('assets/img/EE.JPG') }}" alt="À propos d'INCORS" class="rounded-xl shadow-lg w-full h-auto object-cover">
                </div>
                <div class="lg:w-1/2 animate-fade-in delay-100">
                    <h2 class="text-3xl md:text-4xl font-bold text-dark mb-6">À propos de nous</h2>
                    <p class="text-lg text-secondary mb-6">INCORS est une entreprise leader dans le secteur de la construction et de la rénovation. Avec plus de 15 ans d'expérience, nous nous engageons à fournir des services de qualité supérieure.</p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-secondary"><strong>Expertise technique</strong> - Équipe hautement qualifiée et certifiée</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-secondary"><strong>Qualité garantie</strong> - Matériaux premium et savoir-faire artisanal</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-secondary"><strong>Service client</strong> - Accompagnement personnalisé à chaque étape</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                            <span class="text-secondary"><strong>Respect des délais</strong> - Planification rigoureuse et suivi de projet</span>
                        </li>
                    </ul>
                    
                    <div class="flex flex-wrap gap-6">
                        <div class="text-center">
                            <h3 class="text-3xl font-bold text-primary mb-1">15+</h3>
                            <p class="text-secondary">Ans d'expérience</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-3xl font-bold text-primary mb-1">500+</h3>
                            <p class="text-secondary">Projets réalisés</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-3xl font-bold text-primary mb-1">98%</h3>
                            <p class="text-secondary">Clients satisfaits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produits Section -->
    <section id="produits" class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Nos Produits</h2>
                <p class="text-lg text-secondary max-w-2xl mx-auto">Matériaux de qualité pour des résultats exceptionnels</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Produit 1 -->
                <div class="group bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('assets/img/G.JPG') }}" alt="Carrelage" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-2">Carrelage Premium</h3>
                        <p class="text-secondary mb-4">Large choix de carrelages intérieurs et extérieurs</p>
                        <a href="#" class="text-primary font-medium hover:text-blue-700 transition-colors duration-300 inline-flex items-center">
                            Voir options <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Produit 2 -->
                <div class="group bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('assets/img/m.JPG') }}" alt="Parquet" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-2">Parquet Massif</h3>
                        <p class="text-secondary mb-4">Essences nobles et traitements durables</p>
                        <a href="#" class="text-primary font-medium hover:text-blue-700 transition-colors duration-300 inline-flex items-center">
                            Voir options <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Produit 3 -->
                <div class="group bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('assets/img/5.PNG') }}" alt="Peinture" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-2">Peintures Écologiques</h3>
                        <p class="text-secondary mb-4">Gamme de peintures sans COV pour un intérieur sain</p>
                        <a href="#" class="text-primary font-medium hover:text-blue-700 transition-colors duration-300 inline-flex items-center">
                            Voir options <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Produit 4 -->
                <div class="group bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="{{ asset('assets/img/P5.JPG') }}" alt="Sanitaire" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-dark mb-2">Sanitaires Design</h3>
                        <p class="text-secondary mb-4">Salles de bain modernes et fonctionnelles</p>
                        <a href="#" class="text-primary font-medium hover:text-blue-700 transition-colors duration-300 inline-flex items-center">
                            Voir options <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-primary hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Voir tous nos produits
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gradient-to-r from-light to-gray-100 relative">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-accent"></div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Ce que disent nos clients</h2>
                <p class="text-lg text-secondary max-w-2xl mx-auto">Ils nous ont fait confiance pour leurs projets</p>
            </div>
            
            <div class="relative">
                <div class="testimonial-carousel overflow-hidden">
                    <div class="flex transition-transform duration-500">
                        <!-- Témoignage 1 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="bg-white rounded-xl shadow-lg p-8 md:p-10 max-w-3xl mx-auto">
                                <div class="flex justify-center mb-6 text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <blockquote class="text-lg text-center text-secondary italic relative">
                                    <span class="absolute top-0 left-0 text-5xl text-primary opacity-10 font-serif">"</span>
                                    <p class="px-8">Un service exceptionnel et professionnel. L'équipe d'INCORS a su comprendre nos besoins et les traduire en un projet magnifique. Je recommande vivement pour tous vos projets de construction!</p>
                                    <span class="absolute bottom-0 right-0 text-5xl text-primary opacity-10 font-serif">"</span>
                                </blockquote>
                                <div class="text-center mt-6">
                                    <p class="font-bold text-dark">Marie Dupont</p>
                                    <p class="text-sm text-secondary">Propriétaire à Lyon</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Témoignage 2 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="bg-white rounded-xl shadow-lg p-8 md:p-10 max-w-3xl mx-auto">
                                <div class="flex justify-center mb-6 text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <blockquote class="text-lg text-center text-secondary italic relative">
                                    <span class="absolute top-0 left-0 text-5xl text-primary opacity-10 font-serif">"</span>
                                    <p class="px-8">Équipe très compétente et à l'écoute des besoins du client. Ils ont parfaitement réalisé notre projet de rénovation dans les délais et le budget impartis. Un vrai plaisir de travailler avec des professionnels aussi sérieux.</p>
                                    <span class="absolute bottom-0 right-0 text-5xl text-primary opacity-10 font-serif">"</span>
                                </blockquote>
                                <div class="text-center mt-6">
                                    <p class="font-bold text-dark">Jean Martin</p>
                                    <p class="text-sm text-secondary">Gérant d'hôtel à Paris</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Témoignage 3 -->
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="bg-white rounded-xl shadow-lg p-8 md:p-10 max-w-3xl mx-auto">
                                <div class="flex justify-center mb-6 text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <blockquote class="text-lg text-center text-secondary italic relative">
                                    <span class="absolute top-0 left-0 text-5xl text-primary opacity-10 font-serif">"</span>
                                    <p class="px-8">Travail de qualité, respect des délais et professionnalisme exemplaire. Le suivi de chantier était quotidien et les conseils avisés. Je suis très satisfait du résultat final qui dépasse mes attentes!</p>
                                    <span class="absolute bottom-0 right-0 text-5xl text-primary opacity-10 font-serif">"</span>
                                </blockquote>
                                <div class="text-center mt-6">
                                    <p class="font-bold text-dark">Sophie Laurent</p>
                                    <p class="text-sm text-secondary">Architecte d'intérieur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="testimonial-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-primary hover:bg-blue-700 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 z-10">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <button class="testimonial-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-primary hover:bg-blue-700 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 z-10">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">Questions Fréquentes</h2>
                <p class="text-lg text-secondary max-w-2xl mx-auto">Trouvez des réponses à vos questions les plus courantes</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-4">
                    <!-- Question 1 -->
                    <div class="accordion-item bg-light rounded-xl overflow-hidden transition-all duration-300">
                        <button class="accordion-button w-full flex justify-between items-center p-6 text-left font-bold text-dark hover:bg-gray-50 transition-colors duration-300">
                            <span class="flex items-center">
                                <i class="fas fa-question-circle text-primary mr-3"></i>
                                Quel est le délai moyen pour une pose de carrelage complète ?
                            </span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                            <div class="p-6 pt-0 text-secondary">
                                <p>Le délai moyen pour une pose de carrelage dépend de plusieurs facteurs : la surface à couvrir, la complexité du projet (motifs particuliers, découpes), et la préparation nécessaire du support. Pour une pièce standard de 20m² avec un carrelage classique, comptez environ :</p>
                                <ul class="mt-3 space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                        <span>1 jour pour la préparation du support (nivellement, ragréage si nécessaire)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                        <span>1-2 jours pour la pose proprement dite</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                        <span>1 jour pour les finitions (joints, nettoyage)</span>
                                    </li>
                                </ul>
                                <p class="mt-3">Nous établissons toujours un planning détaillé lors du devis initial pour vous donner une estimation précise adaptée à votre projet spécifique.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="accordion-item bg-light rounded-xl overflow-hidden transition-all duration-300">
                        <button class="accordion-button w-full flex justify-between items-center p-6 text-left font-bold text-dark hover:bg-gray-50 transition-colors duration-300">
                            <span class="flex items-center">
                                <i class="fas fa-question-circle text-primary mr-3"></i>
                                Quels types de carrelages proposez-vous ?
                            </span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                            <div class="p-6 pt-0 text-secondary">
                                <p>Notre catalogue comprend une large gamme de carrelages adaptés à tous les besoins et budgets :</p>
                                <div class="grid md:grid-cols-2 gap-6 mt-4">
                                    <div>
                                        <h6 class="font-bold text-dark mb-2">Par type :</h6>
                                        <ul class="space-y-2">
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Grès cérame (émaillé et pleine masse)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Grès cérame technique (haute résistance)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Pierre naturelle (marbre, ardoise, granit)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Terre cuite</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Ciment décoratif</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6 class="font-bold text-dark mb-2">Par usage :</h6>
                                        <ul class="space-y-2">
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Carrelage intérieur (sol et mur)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Carrelage extérieur (antidérapant, gélif)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Carrelage pour piscine</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                                <span>Carrelage technique (industriel, commercial)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mt-4">Tous nos produits sont sélectionnés pour leur qualité, leur durabilité et leur conformité aux normes en vigueur.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="accordion-item bg-light rounded-xl overflow-hidden transition-all duration-300">
                        <button class="accordion-button w-full flex justify-between items-center p-6 text-left font-bold text-dark hover:bg-gray-50 transition-colors duration-300">
                            <span class="flex items-center">
                                <i class="fas fa-question-circle text-primary mr-3"></i>
                                Quelle est la garantie sur vos travaux de carrelage ?
                            </span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div class="accordion-content overflow-hidden max-h-0 transition-all duration-300">
                            <div class="p-6 pt-0 text-secondary">
                                <p>Nos travaux bénéficient d'une double garantie :</p>
                                
                                <h6 class="font-bold text-dark mt-4">1. Garantie décennale (10 ans)</h6>
                                <p>Obligatoire pour tous les travaux de construction, elle couvre :</p>
                                <ul class="mt-2 space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                        <span>Les désordres compromettant la solidité de l'ouvrage</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                        <span>Les défauts rendant le bien impropre à sa destination</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-primary mt-1 mr-2"></i>
                                        <span>Les problèmes d'étanchéité</span>
                                    </li>
                                </ul>
                                
                                <h6 class="font-bold text-dark mt-4">2. Garantie de parfait achèvement (1 an)</h6>
                                <p>Elle couvre tous les désordres apparents ou cachés apparus après la réception des travaux.</p>
                                
                                <h6 class="font-bold text-dark mt-4">3. Garantie biennale (2 ans)</h6>
                                <p>Pour les éléments d'équipement dissociables (chauffage, électricité, etc.).</p>
                                
                                <p class="mt-4"><strong>Important :</strong> Ces garanties sont valables sous réserve d'un entretien normal et d'une utilisation conforme à la destination des locaux. Nous fournissons un document détaillé sur les conditions de garantie avec chaque devis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    
    <!-- Footer -->
    <footer class="bg-dark text-white pt-16 pb-8 relative">
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
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Accordion functionality
        const accordionButtons = document.querySelectorAll('.accordion-button');
        
        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('i.fa-chevron-down');
                
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });
        
        // Testimonial carousel
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('.testimonial-carousel .flex > div');
        const testimonialContainer = document.querySelector('.testimonial-carousel .flex');
        
        function showTestimonial(index) {
            testimonialContainer.style.transform = `translateX(-${index * 100}%)`;
            currentTestimonial = index;
        }
        
        document.querySelector('.testimonial-next').addEventListener('click', () => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        });
        
        document.querySelector('.testimonial-prev').addEventListener('click', () => {
            currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
            showTestimonial(currentTestimonial);
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>