     <div class="">
         <div class="">

             <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
             <div class="flex justify-between text-gray-400 ">
                 <div>
                     Année active :
                     <span class="font-semibold text-blue-600">
                         {{ $activeYear->is_active ?? 'Pas definie' }}
                     </span>
                 </div>
                 <h2>Vous etes un {{ Auth::user()->role }}</h2>
             </div>
             <!-- Cartes de statistiques -->
             <div class="grid grid-cols-1 gap-6 mb-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                 <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                     <span class="text-gray-500">Étudiants</span>
                     <span class="text-3xl font-bold text-gray-800">{{ $stats['students'] ?? 0 }}</span>
                 </div>
                 <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                     <span class="text-gray-500">Enseignants</span>
                     <span class="text-3xl font-bold text-gray-800">{{ $stats['teachers'] ?? 0 }}</span>
                 </div>
                 <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                     <span class="text-gray-500">Spécialités</span>
                     <span class="text-3xl font-bold text-gray-800">{{ $stats['specialties'] ?? 0 }}</span>
                 </div>

                 <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                     <span class="text-gray-500">Modules</span>
                     <span class="text-3xl font-bold text-gray-800">{{ $stats['modules'] ?? 0 }}</span>
                 </div>

                 <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                     <span class="text-gray-500">Évaluations</span>
                     <span class="text-3xl font-bold text-gray-800">{{ $stats['evaluations'] ?? 0 }}</span>
                 </div>

                 <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                     <span class="text-gray-500">Moyenne globale</span>
                     <span class="text-3xl font-bold text-gray-800">{{ $stats['average'] ?? 'N/A' }}</span>
                 </div>


             </div>
             <!-- Résumé académique -->
             <div class="p-6 mb-8 bg-white rounded shadow">
                 <h2 class="mb-4 text-xl font-semibold">Résumé académique</h2>
                 <div class="grid grid-cols-1 gap-4 text-gray-700 sm:grid-cols-2 md:grid-cols-4">
                     <div>Année active : <span
                             class="font-medium text-blue-600">{{ $activeYear->libelle ?? 'N/A' }}</span>
                     </div>
                     <div>Semestres : {{ $summary['semesters'] ?? 2 }}</div>
                     <div>Spécialités actives : {{ $summary['active_specialties'] ?? 0 }}</div>
                     <div>Modules totaux : {{ $summary['total_modules'] ?? 0 }}</div>
                 </div>
             </div>
             <!-- Dernières activités -->
             <div class="p-6 mb-8 bg-white rounded shadow">
                 <h2 class="mb-4 text-xl font-semibold">Dernières activités</h2>
                 <div class="overflow-x-auto">
                     <table class="min-w-full divide-y divide-gray-200">
                         <thead class="bg-gray-50">
                             <tr>
                                 <th
                                     class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Date</th>
                                 <th
                                     class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Type</th>
                                 <th
                                     class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Description</th>
                             </tr>
                         </thead>

                     </table>
                 </div>
             </div>

         </div>

         {{-- @extends('layouts.app')

      @section('content')
          <div class="p-6 mx-auto max-w-7xl">

              <!-- En-tête -->
              <div class="flex items-center justify-between mb-8">
                  <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
                  <div class="text-gray-600">
                      Année active :
                      <span class="font-semibold text-blue-600">
                          {{ $activeYear->libelle ?? 'Non définie' }}
                      </span>
                  </div>
              </div>

              <!-- Cartes de statistiques -->
              <div class="grid grid-cols-1 gap-6 mb-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                  <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                      <span class="text-gray-500">Étudiants</span>
                      <span class="text-3xl font-bold text-gray-800">{{ $stats['students'] ?? 0 }}</span>
                  </div>

                  <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                      <span class="text-gray-500">Enseignants</span>
                      <span class="text-3xl font-bold text-gray-800">{{ $stats['teachers'] ?? 0 }}</span>
                  </div>

                  <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                      <span class="text-gray-500">Spécialités</span>
                      <span class="text-3xl font-bold text-gray-800">{{ $stats['specialties'] ?? 0 }}</span>
                  </div>

                  <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                      <span class="text-gray-500">Modules</span>
                      <span class="text-3xl font-bold text-gray-800">{{ $stats['modules'] ?? 0 }}</span>
                  </div>

                  <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                      <span class="text-gray-500">Évaluations</span>
                      <span class="text-3xl font-bold text-gray-800">{{ $stats['evaluations'] ?? 0 }}</span>
                  </div>

                  <div class="flex flex-col items-center p-6 bg-white rounded shadow">
                      <span class="text-gray-500">Moyenne globale</span>
                      <span class="text-3xl font-bold text-gray-800">{{ $stats['average'] ?? 'N/A' }}</span>
                  </div>
              </div>

              <!-- Résumé académique -->
              <div class="p-6 mb-8 bg-white rounded shadow">
                  <h2 class="mb-4 text-xl font-semibold">Résumé académique</h2>
                  <div class="grid grid-cols-1 gap-4 text-gray-700 sm:grid-cols-2 md:grid-cols-4">
                      <div>Année active : <span class="font-medium text-blue-600">{{ $activeYear->libelle ?? 'N/A' }}</span>
                      </div>
                      <div>Semestres : {{ $summary['semesters'] ?? 2 }}</div>
                      <div>Spécialités actives : {{ $summary['active_specialties'] ?? 0 }}</div>
                      <div>Modules totaux : {{ $summary['total_modules'] ?? 0 }}</div>
                  </div>
              </div>

              <!-- Dernières activités -->
              <div class="p-6 mb-8 bg-white rounded shadow">
                  <h2 class="mb-4 text-xl font-semibold">Dernières activités</h2>
                  <div class="overflow-x-auto">
                      <table class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-gray-50">
                              <tr>
                                  <th
                                      class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                      Date</th>
                                  <th
                                      class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                      Type</th>
                                  <th
                                      class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase">
                                      Description</th>
                              </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                              @forelse($activities as $activity)
                                  <tr>
                                      <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">
                                          {{ $activity->created_at->format('d/m/Y H:i') }}</td>
                                      <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $activity->type }}
                                      </td>
                                      <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">
                                          {{ $activity->description }}</td>
                                  </tr>
                              @empty
                                  <tr>
                                      <td colspan="3" class="px-6 py-4 text-center text-gray-500">Aucune activité récente
                                      </td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                  </div>
              </div>

              <!-- Accès rapides -->
              <div class="p-6 bg-white rounded shadow">
                  <h2 class="mb-4 text-xl font-semibold">Actions rapides</h2>
                  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                      <a href="{{ route('students.create') }}"
                          class="block px-4 py-3 text-center text-white bg-blue-600 rounded hover:bg-blue-700">➕ Ajouter
                          étudiant</a>
                      <a href="{{ route('specialties.create') }}"
                          class="block px-4 py-3 text-center text-white bg-green-600 rounded hover:bg-green-700">➕ Ajouter
                          spécialité</a>
                      <a href="{{ route('modules.create') }}"
                          class="block px-4 py-3 text-center text-white bg-purple-600 rounded hover:bg-purple-700">➕ Ajouter
                          module</a>
                      <a href="{{ route('evaluations.create') }}"
                          class="block px-4 py-3 text-center text-white bg-yellow-500 rounded hover:bg-yellow-600">✏️ Saisir
                          notes</a>
                      <a href="{{ route('reports.index') }}"
                          class="block px-4 py-3 text-center text-white bg-gray-600 rounded hover:bg-gray-700">📄 Générer
                          bulletin</a>
                  </div>
              </div>

          </div>
      @endsection --}}
