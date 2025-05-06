<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INCORS - Dashboard Utilisateur</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0fdfa',
              100: '#ccfbf1',
              200: '#99f6e4',
              300: '#5eead4',
              400: '#2dd4bf',
              500: '#14b8a6',
              600: '#0d9488',
              700: '#0f766e',
              800: '#115e59',
              900: '#134e4a',
            },
            secondary: '#1e293b'
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif']
          }
        }
      }
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
    .sidebar-item {
      @apply flex items-center p-3 rounded-lg transition-all;
    }
    .sidebar-item:hover {
      @apply bg-primary-100 text-primary-700;
    }
    .sidebar-item.active {
      @apply bg-primary-600 text-white;
    }
    .card {
      @apply bg-white p-6 rounded-xl shadow-sm border border-gray-100 transition-all hover:shadow-md;
    }
    .badge {
      @apply inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium;
    }
  </style>
</head>
<body class="bg-gray-50">
  @auth
      <div class="flex h-screen">
          <!-- Sidebar -->
          <aside class="w-64 bg-white shadow-sm border-r border-gray-200 flex flex-col">
            <div class="p-4 text-2xl font-bold text-primary-700 border-b border-gray-200 flex items-center space-x-2">
              <i class="fas fa-home text-primary-600"></i>
              <span>INCORS</span>
            </div>
            <nav class="p-4 flex-1">
              <ul class="space-y-1">
                <li>
                  <a href="#" class="sidebar-item active">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Tableau de bord</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="sidebar-item">
                    <i class="fas fa-shopping-cart mr-3"></i>
                    <span>Mes commandes</span>
                    <span class="ml-auto bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded-full">3</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="sidebar-item">
                    <i class="fas fa-file-invoice-dollar mr-3"></i>
                    <span>Mes devis</span>
                    <span class="ml-auto bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded-full">1</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="sidebar-item">
                    <i class="fas fa-search mr-3"></i>
                    <span>Rechercher un artisan</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="sidebar-item">
                    <i class="fas fa-user mr-3"></i>
                    <span>Profil</span>
                  </a>
                </li>
              </ul>
            </nav>
            <div class="p-4 border-t border-gray-200">
              <a href="#" class="sidebar-item text-red-600 hover:bg-red-50">
                <i class="fas fa-sign-out-alt mr-3"></i>
                <span>Déconnexion</span>
              </a>
            </div>
          </aside>
  
          <!-- Main content -->
          <main class="flex-1 overflow-y-auto bg-gray-50">
            <header class="bg-white shadow-sm border-b border-gray-200 p-4">
              <div class="flex justify-between items-center">
                <h1 class="text-2xl font-semibold text-gray-800">Bonjour, <span class="text-primary-600">{{ auth()->user()->name }}</span></h1>
                <div class="flex items-center space-x-4">
                  <div class="relative">
                    <button class="p-2 rounded-full hover:bg-gray-100 relative">
                      <i class="fas fa-bell text-gray-500"></i>
                      <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                    </button>
                  </div>
                  <div class="flex items-center space-x-2">
                    <div class="h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-600">
                      <i class="fas fa-user"></i>
                    </div>
                    <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </div>
            </header>
  
            <div class="p-6">
              <!-- Section de recherche d'artisan -->
              <div class="card mb-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                  <i class="fas fa-search mr-2 text-primary-600"></i>
                  Rechercher un artisan
                </h2>
                <div class="flex gap-3">
                  <div class="flex-1 relative">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    <input type="text" id="artisanSearch" placeholder="Nom, métier ou zone géographique" 
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                  </div>
                  <button onclick="rechercherArtisan()" 
                              class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-2 rounded-lg transition-colors flex items-center">
                    <i class="fas fa-search mr-2"></i>
                    Rechercher
                  </button>
                </div>
                <div id="resultatsArtisans" class="mt-4 space-y-3">
                  <!-- Les résultats seront affichés ici -->
                </div>
              </div>
  
              <!-- Stats Cards -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="card">
                  <div class="flex items-center justify-between">
                    <div>
                      <h3 class="text-lg font-medium text-gray-500">Commandes</h3>
                      <p class="text-3xl font-bold text-gray-800 mt-1">3</p>
                    </div>
                    <div class="h-12 w-12 rounded-full bg-primary-50 flex items-center justify-center">
                      <i class="fas fa-shopping-cart text-primary-600 text-xl"></i>
                    </div>
                  </div>
                  <div class="mt-4">
                    <span class="text-sm text-green-600 font-medium">
                      <i class="fas fa-arrow-up mr-1"></i> 1 nouvelle
                    </span>
                  </div>
                </div>
                
                <div class="card">
                  <div class="flex items-center justify-between">
                    <div>
                      <h3 class="text-lg font-medium text-gray-500">Devis en cours</h3>
                      <p class="text-3xl font-bold text-gray-800 mt-1">1</p>
                    </div>
                    <div class="h-12 w-12 rounded-full bg-primary-50 flex items-center justify-center">
                      <i class="fas fa-file-invoice-dollar text-primary-600 text-xl"></i>
                    </div>
                  </div>
                  <div class="mt-4">
                    <span class="text-sm text-yellow-600 font-medium">
                      <i class="fas fa-clock mr-1"></i> En attente
                    </span>
                  </div>
                </div>
                
                <div class="card">
                  <div class="flex items-center justify-between">
                    <div>
                      <h3 class="text-lg font-medium text-gray-500">Notifications</h3>
                      <p class="text-3xl font-bold text-gray-800 mt-1">2</p>
                    </div>
                    <div class="h-12 w-12 rounded-full bg-primary-50 flex items-center justify-center">
                      <i class="fas fa-bell text-primary-600 text-xl"></i>
                    </div>
                  </div>
                  <div class="mt-4">
                    <span class="text-sm text-blue-600 font-medium">
                      <i class="fas fa-envelope mr-1"></i> Non lues
                    </span>
                  </div>
                </div>
  
                <!-- Activité récente -->
                <div class="card">
                  <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-history mr-2 text-primary-600"></i>
                    Activité récente
                  </h2>
                  <ul class="space-y-3">
                    <li class="p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition-colors">
                      <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-green-50 flex items-center justify-center text-green-600 mr-3 mt-1">
                          <i class="fas fa-check"></i>
                        </div>
                        <div class="flex-1">
                          <h3 class="font-medium text-gray-800">Commande #2025 livrée</h3>
                          <p class="text-sm text-gray-500">Le 03/05/2025 à 14:30</p>
                        </div>
                        <span class="badge bg-green-100 text-green-800">Terminé</span>
                      </div>
                    </li>
                    
                    <li class="p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition-colors">
                      <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-yellow-50 flex items-center justify-center text-yellow-600 mr-3 mt-1">
                          <i class="fas fa-clock"></i>
                        </div>
                        <div class="flex-1">
                          <h3 class="font-medium text-gray-800">Devis #871 en attente</h3>
                          <p class="text-sm text-gray-500">Depuis le 02/05/2025</p>
                          <p class="text-xs text-gray-400 mt-1">Artisan: Jean Carreleur</p>
                        </div>
                        <span class="badge bg-yellow-100 text-yellow-800">En attente</span>
                      </div>
                    </li>
                    
                    <li class="p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition-colors">
                      <div class="flex items-start">
                        <div class="h-10 w-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 mr-3 mt-1">
                          <i class="fas fa-envelope"></i>
                        </div>
                        <div class="flex-1">
                          <h3 class="font-medium text-gray-800">Message de l'artisan</h3>
                          <p class="text-sm text-gray-500">Jean Carreleur - 01/05/2025</p>
                          <p class="text-xs text-gray-400 mt-1">"Bonjour, concernant votre devis..."</p>
                        </div>
                        <span class="badge bg-blue-100 text-blue-800">Nouveau</span>
                      </div>
                    </li>
                  </ul>
                  <div class="mt-4 text-right">
                    <a href="#" class="text-sm text-primary-600 hover:text-primary-800 font-medium">
                      Voir toute l'activité <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <script>
            const artisans = [
              { nom: 'Jean Carreleur', zone: 'Douala', metier: 'Carrelage', note: 4.8, avis: 42 },
              { nom: 'Fatou Carreaux', zone: 'Yaoundé', metier: 'Carrelage', note: 4.5, avis: 28 },
              { nom: 'Marc Le Posé', zone: 'Bafoussam', metier: 'Maçonnerie', note: 4.7, avis: 35 },
              { nom: 'Paul Électricien', zone: 'Douala', metier: 'Électricité', note: 4.9, avis: 56 },
              { nom: 'Sophie Plomberie', zone: 'Yaoundé', metier: 'Plomberie', note: 4.6, avis: 31 }
            ];
  
            function rechercherArtisan() {
              const recherche = document.getElementById('artisanSearch').value.toLowerCase();
              const resultats = artisans.filter(a => 
                a.nom.toLowerCase().includes(recherche) || 
                a.zone.toLowerCase().includes(recherche) ||
                a.metier.toLowerCase().includes(recherche)
              );
              
              const container = document.getElementById('resultatsArtisans');
              container.innerHTML = '';
              
              if (resultats.length === 0) {
                container.innerHTML = `
                  <div class="text-center py-8">
                    <i class="fas fa-search text-gray-300 text-4xl mb-2"></i>
                    <p class="text-gray-500">Aucun artisan trouvé pour votre recherche.</p>
                  </div>
                `;
                return;
              }
              
              resultats.forEach(a => {
                const card = document.createElement('div');
                card.className = 'p-4 border border-gray-100 rounded-lg hover:shadow-md transition-shadow';
                card.innerHTML = `
                  <div class="flex items-start">
                    <div class="h-12 w-12 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 mr-3">
                      <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="flex-1">
                      <h3 class="font-semibold text-gray-800">${a.nom}</h3>
                      <p class="text-sm text-gray-600">${a.metier} - ${a.zone}</p>
                      <div class="flex items-center mt-1">
                        <div class="flex text-yellow-400 mr-2">
                          ${Array(Math.floor(a.note)).fill('<i class="fas fa-star"></i>').join(')}
                          ${a.note % 1 ? '<i class="fas fa-star-half-alt"></i>' : ''}
                        </div>
                        <span class="text-xs text-gray-500">(${a.avis} avis)</span>
                      </div>
                    </div>
                    <button class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg text-sm transition-colors">
                      Contacter
                    </button>
                  </div>
                `;
                container.appendChild(card);
              });
            }
          </script>
        </div>
      @else
        <script>
            window.location.href = "{{ route('login') }}";
        </script>
      @endauth
      <!-- Keep the script section -->
      <script>
          // ... keep existing JavaScript ...
      </script>
</body>
</html>