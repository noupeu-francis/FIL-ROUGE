<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Administrateur - INCORS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0f9ff',
              100: '#e0f2fe',
              200: '#bae6fd',
              300: '#7dd3fc',
              400: '#38bdf8',
              500: '#0ea5e9',
              600: '#0284c7',
              700: '#0369a1',
              800: '#075985',
              900: '#0c4a6e',
            },
            secondary: {
              500: '#64748b',
              700: '#334155'
            }
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
    
    .nav-item {
      @apply flex items-center px-4 py-3 rounded-lg transition-colors;
    }
    
    .nav-item:hover {
      @apply bg-primary-50 text-primary-600;
    }
    
    .nav-item.active {
      @apply bg-primary-100 text-primary-700 font-medium;
    }
    
    .badge {
      @apply inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium;
    }
    
    .card {
      @apply bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden;
    }
    
    .table-row {
      @apply hover:bg-gray-50 transition-colors;
    }
  </style>
</head>
<body class="bg-gray-50">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-sm border-r border-gray-200 flex flex-col">
      <div class="p-6 border-b border-gray-200 flex items-center space-x-2">
        <div class="h-8 w-8 rounded-lg bg-primary-600 flex items-center justify-center">
          <i class="fas fa-cog text-white"></i>
        </div>
        <h1 class="text-xl font-bold text-gray-800">INCORS Admin</h1>
      </div>
      
      <nav class="p-4 flex-1">
        <ul class="space-y-1">
          <li>
            <a href="#" class="nav-item active">
              <i class="fas fa-tachometer-alt mr-3 text-primary-600"></i>
              <span>Tableau de bord</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <i class="fas fa-users mr-3 text-secondary-500"></i>
              <span>Utilisateurs</span>
              <span class="ml-auto bg-primary-100 text-primary-800 text-xs px-2 py-0.5 rounded-full">245</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <i class="fas fa-hammer mr-3 text-secondary-500"></i>
              <span>Artisans</span>
              <span class="ml-auto bg-green-100 text-green-800 text-xs px-2 py-0.5 rounded-full">78</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <i class="fas fa-box-open mr-3 text-secondary-500"></i>
              <span>Produits</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <i class="fas fa-shopping-cart mr-3 text-secondary-500"></i>
              <span>Commandes</span>
              <span class="ml-auto bg-purple-100 text-purple-800 text-xs px-2 py-0.5 rounded-full">126</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item">
              <i class="fas fa-star mr-3 text-secondary-500"></i>
              <span>Avis</span>
            </a>
          </li>
        </ul>
      </nav>
      
      <div class="p-4 border-t border-gray-200">
        <a href="#" class="nav-item text-red-600 hover:bg-red-50">
          <i class="fas fa-sign-out-alt mr-3"></i>
          <span>Déconnexion</span>
        </a>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto">
      <header class="bg-white shadow-sm border-b border-gray-200 p-4">
        <div class="flex justify-between items-center">
          <div>
            <h2 class="text-xl font-semibold text-gray-800">Tableau de bord</h2>
            <p class="text-sm text-gray-500">Aperçu des activités et statistiques</p>
          </div>
          
          <div class="flex items-center space-x-4">
            <div class="relative">
              <button class="p-2 rounded-full hover:bg-gray-100 relative">
                <i class="fas fa-bell text-gray-500"></i>
                <span class="absolute top-1 right-1 h-2 w-2 rounded-full bg-red-500"></span>
              </button>
            </div>
            
            <div class="flex items-center space-x-2">
              <div class="h-8 w-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-600">
                <i class="fas fa-user"></i>
              </div>
              <span class="text-sm font-medium">Admin</span>
            </div>
          </div>
        </div>
      </header>

      <div class="p-6 space-y-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="card">
            <div class="p-6">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-lg font-medium text-gray-500">Utilisateurs</h3>
                  <p class="text-3xl font-bold text-gray-800 mt-1">245</p>
                </div>
                <div class="h-12 w-12 rounded-full bg-blue-50 flex items-center justify-center">
                  <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
              </div>
              <div class="mt-4">
                <span class="text-sm text-green-600 font-medium">
                  <i class="fas fa-arrow-up mr-1"></i> 12% ce mois
                </span>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="p-6">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-lg font-medium text-gray-500">Artisans</h3>
                  <p class="text-3xl font-bold text-gray-800 mt-1">78</p>
                </div>
                <div class="h-12 w-12 rounded-full bg-green-50 flex items-center justify-center">
                  <i class="fas fa-hammer text-green-600 text-xl"></i>
                </div>
              </div>
              <div class="mt-4">
                <span class="text-sm text-green-600 font-medium">
                  <i class="fas fa-arrow-up mr-1"></i> 8% ce mois
                </span>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="p-6">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-lg font-medium text-gray-500">Commandes</h3>
                  <p class="text-3xl font-bold text-gray-800 mt-1">126</p>
                </div>
                <div class="h-12 w-12 rounded-full bg-purple-50 flex items-center justify-center">
                  <i class="fas fa-shopping-cart text-purple-600 text-xl"></i>
                </div>
              </div>
              <div class="mt-4">
                <span class="text-sm text-green-600 font-medium">
                  <i class="fas fa-arrow-up mr-1"></i> 15% ce mois
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Dernières commandes -->
        <div class="card">
          <div class="p-6">
            <div class="flex justify-between items-center mb-6">
              <h4 class="text-lg font-semibold text-gray-800">Dernières commandes</h4>
              <a href="#" class="text-sm text-primary-600 hover:text-primary-800 font-medium">
                Voir tout <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>
            
            <div class="overflow-x-auto">
              <table class="w-full text-sm">
                <thead>
                  <tr class="text-left text-gray-500 border-b border-gray-200">
                    <th class="pb-3 font-medium">Client</th>
                    <th class="pb-3 font-medium">Produit</th>
                    <th class="pb-3 font-medium">Montant</th>
                    <th class="pb-3 font-medium">Date</th>
                    <th class="pb-3 font-medium">Statut</th>
                    <th class="pb-3 font-medium"></th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  <tr class="table-row">
                    <td class="py-4">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                          <i class="fas fa-user text-gray-500 text-sm"></i>
                        </div>
                        <span>Jean Dupont</span>
                      </div>
                    </td>
                    <td class="py-4">Carrelage mural</td>
                    <td class="py-4 font-medium">120€</td>
                    <td class="py-4 text-gray-500">03/05/2025</td>
                    <td class="py-4">
                      <span class="badge bg-green-100 text-green-800">
                        <i class="fas fa-check-circle mr-1"></i> Livré
                      </span>
                    </td>
                    <td class="py-4 text-right">
                      <button class="text-primary-600 hover:text-primary-800">
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                    </td>
                  </tr>
                  
                  <tr class="table-row">
                    <td class="py-4">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                          <i class="fas fa-user text-gray-500 text-sm"></i>
                        </div>
                        <span>Fatou Ndiaye</span>
                      </div>
                    </td>
                    <td class="py-4">Pose sol</td>
                    <td class="py-4 font-medium">250€</td>
                    <td class="py-4 text-gray-500">02/05/2025</td>
                    <td class="py-4">
                      <span class="badge bg-yellow-100 text-yellow-800">
                        <i class="fas fa-clock mr-1"></i> En cours
                      </span>
                    </td>
                    <td class="py-4 text-right">
                      <button class="text-primary-600 hover:text-primary-800">
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                    </td>
                  </tr>
                  
                  <tr class="table-row">
                    <td class="py-4">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                          <i class="fas fa-user text-gray-500 text-sm"></i>
                        </div>
                        <span>Marc Leclerc</span>
                      </div>
                    </td>
                    <td class="py-4">Peinture intérieure</td>
                    <td class="py-4 font-medium">180€</td>
                    <td class="py-4 text-gray-500">01/05/2025</td>
                    <td class="py-4">
                      <span class="badge bg-blue-100 text-blue-800">
                        <i class="fas fa-truck mr-1"></i> Expédié
                      </span>
                    </td>
                    <td class="py-4 text-right">
                      <button class="text-primary-600 hover:text-primary-800">
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                    </td>
                  </tr>
                  
                  <tr class="table-row">
                    <td class="py-4">
                      <div class="flex items-center">
                        <div class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                          <i class="fas fa-user text-gray-500 text-sm"></i>
                        </div>
                        <span>Sophie Martin</span>
                      </div>
                    </td>
                    <td class="py-4">Plomberie</td>
                    <td class="py-4 font-medium">320€</td>
                    <td class="py-4 text-gray-500">28/04/2025</td>
                    <td class="py-4">
                      <span class="badge bg-red-100 text-red-800">
                        <i class="fas fa-times-circle mr-1"></i> Annulé
                      </span>
                    </td>
                    <td class="py-4 text-right">
                      <button class="text-primary-600 hover:text-primary-800">
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Statistiques et autres sections -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
          <div class="card">
            <div class="p-6">
              <h4 class="text-lg font-semibold text-gray-800 mb-4">Statistiques mensuelles</h4>
              <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-center h-64">
                <div class="text-center">
                  <i class="fas fa-chart-line text-4xl text-gray-300 mb-2"></i>
                  <p class="text-gray-500">Graphique en cours de développement</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="p-6">
              <h4 class="text-lg font-semibold text-gray-800 mb-4">Artisans récents</h4>
              <div class="space-y-4">
                <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg transition-colors">
                  <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-3">
                    <i class="fas fa-hammer"></i>
                  </div>
                  <div class="flex-1">
                    <h5 class="font-medium">Jean Carreleur</h5>
                    <p class="text-sm text-gray-500">Carrelage - Douala</p>
                  </div>
                  <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Nouveau</span>
                </div>
                
                <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg transition-colors">
                  <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                    <i class="fas fa-bolt"></i>
                  </div>
                  <div class="flex-1">
                    <h5 class="font-medium">Paul Électricien</h5>
                    <p class="text-sm text-gray-500">Électricité - Yaoundé</p>
                  </div>
                  <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Vérifié</span>
                </div>
                
                <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg transition-colors">
                  <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 mr-3">
                    <i class="fas fa-tint"></i>
                  </div>
                  <div class="flex-1">
                    <h5 class="font-medium">Sophie Plomberie</h5>
                    <p class="text-sm text-gray-500">Plomberie - Bafoussam</p>
                  </div>
                  <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded-full">Populaire</span>
                </div>
              </div>
              <div class="mt-4 text-right">
                <a href="#" class="text-sm text-primary-600 hover:text-primary-800 font-medium">
                  Voir tous <i class="fas fa-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>