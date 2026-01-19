  <div class="flex min-h-[calc(100vh-4rem)] bg-gray-50 dark:bg-gray-950">
      <!-- SIDEBAR -->
      <aside
          class="fixed inset-y-0 left-0 z-40 w-72 bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 shadow-sm transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0
        {{ $sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0' }}">

          <div class="flex flex-col h-full px-4 py-6 overflow-y-auto">
              <!-- Logo -->
              <div class="flex items-center gap-3 px-2 mb-10">
                  <div
                      class="flex items-center justify-center w-10 h-10 text-xl font-bold text-white shadow-md bg-gradient-to-br from-indigo-600 to-blue-600 rounded-xl">
                      GN
                  </div>
                  <span class="text-xl font-bold text-gray-900 dark:text-white">GestNotes</span>
              </div>

              <!-- Navigation -->
              <nav class="flex-1 space-y-1">
                  <x-sidebar-link wire:click="setSection('dashboard')" :active="$activeSection === 'dashboard'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                          </svg>
                      </x-slot>
                      Tableau de bord
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('eleves')" :active="$activeSection === 'eleves'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Élèves
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('annee')" :active="$activeSection === 'annee'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Annee Academique
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('Specialites')" :active="$activeSection === 'Specialites'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Specialites
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('Modules')" :active="$activeSection === 'Modules'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Modules
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('Semestre')" :active="$activeSection === 'Semestre'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Semestre
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('Utilisateurs')" :active="$activeSection === 'Utilisateurs'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Utilisateurs
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('evaluations')" :active="$activeSection === 'evaluations'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Évaluations
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('notes')" :active="$activeSection === 'notes'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Notes
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('Moyenne')" :active="$activeSection === 'Moyenne'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Moyenne
                  </x-sidebar-link>

                  <x-sidebar-link wire:click="setSection('Rapports')" :active="$activeSection === 'Rapports'">
                      <x-slot name="icon">
                          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                      </x-slot>
                      Rapports
                  </x-sidebar-link>
                  <!-- Ajoute ici d'autres sections comme classes, notes, bulletins... -->
              </nav>

              <!-- Bas de sidebar -->
              <div class="pt-6 mt-auto border-t border-gray-200 dark:border-gray-700">
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <x-sidebar-link href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                          <x-slot name="icon">
                              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                              </svg>
                          </x-slot>
                          Déconnexion
                      </x-sidebar-link>
                  </form>
              </div>
          </div>
      </aside>

      <!-- Bouton burger mobile -->
      <button wire:click="toggleSidebar"
          class="fixed z-50 p-4 text-white transition bg-indigo-600 rounded-full shadow-xl md:hidden bottom-6 right-6 hover:bg-indigo-700">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </button>

      <!-- Overlay mobile -->
      @if ($sidebarOpen)
          <div wire:click="toggleSidebar" class="fixed inset-0 z-30 bg-black/50 md:hidden"></div>
      @endif

      <!-- Contenu principal -->
      <main class="flex-1 p-6 overflow-y-auto md:p-8">
          <div class="mx-auto max-w-7xl">
              @if ($activeSection === 'dashboard')
                  <livewire:dashboard.home />
              @elseif($activeSection === 'eleves')
                  <livewire:dashboard.students />
              @elseif ($activeSection === 'annee')
                  <livewire:dashboard.academic-years />
              @elseif ($activeSection === 'Rapports')
                  <livewire:dashboard.report>
                  @else
                      <h1 class="mb-6 text-3xl font-bold">Section : {{ $activeSection }}</h1>
              @endif
          </div>
      </main>
  </div>
