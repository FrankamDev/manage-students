<div class="flex min-h-[calc(100vh-4rem)] bg-gray-50 dark:bg-gray-950">

    <!-- SIDEBAR (pleine hauteur, fixe sur mobile, visible par défaut sur desktop) -->
    <aside
        class="fixed inset-y-0 left-0 z-40 w-72 bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 shadow-sm transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0
        {{ $sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0' }}">

        <div class="flex flex-col h-full px-4 py-6 overflow-y-auto">
            <!-- Logo / Titre -->
            <div class="flex items-center gap-3 px-2 mb-10">
                <div
                    class="flex items-center justify-center w-10 h-10 text-xl font-bold text-white shadow-md bg-gradient-to-br from-indigo-600 to-blue-600 rounded-xl">
                    GN
                </div>
                <span class="text-xl font-bold text-gray-900 dark:text-white">GestNotes</span>
            </div>

            <!-- Navigation principale -->
            <nav class="flex-1 space-y-2">
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

                <x-sidebar-link wire:click="setSection('classes')" :active="$activeSection === 'classes'">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </x-slot>
                    Classes
                </x-sidebar-link>

                <x-sidebar-link wire:click="setSection('notes')" :active="$activeSection === 'notes'">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </x-slot>
                    Saisie des notes
                </x-sidebar-link>

                <x-sidebar-link wire:click="setSection('bulletins')" :active="$activeSection === 'bulletins'">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                    </x-slot>
                    Bulletins
                </x-sidebar-link>

                <x-sidebar-link wire:click="setSection('stats')" :active="$activeSection === 'stats'">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055zM20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                    </x-slot>
                    Statistiques
                </x-sidebar-link>
            </nav>

            <!-- Bas de sidebar (Profil + Déconnexion) -->
            <div class="pt-6 mt-auto space-y-2 border-t border-gray-200 dark:border-gray-700">
                <x-sidebar-link href="{{ route('profile.edit') }}" :active="false">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </x-slot>
                    Mon profil
                </x-sidebar-link>

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

    <!-- Bouton burger (mobile uniquement) -->
    <button wire:click="toggleSidebar"
        class="fixed z-50 p-4 text-white transition transform bg-indigo-600 rounded-full shadow-xl md:hidden bottom-6 right-6 hover:bg-indigo-700 hover:scale-105">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Overlay sombre quand sidebar ouverte sur mobile -->
    @if ($sidebarOpen)
        <div wire:click="toggleSidebar"
            class="fixed inset-0 z-30 transition-opacity duration-300 bg-black/50 md:hidden"></div>
    @endif

    <!-- Contenu principal (change selon la section cliquée) -->
    <main class="flex-1 p-6 overflow-y-auto md:p-8">
        <div class="mx-auto max-w-7xl">
            @if ($activeSection === 'dashboard')
                <h1 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Tableau de bord</h1>
                <div class="p-6 bg-white shadow-sm dark:bg-gray-800 rounded-xl">
                    <p class="text-lg text-gray-600 dark:text-gray-400">
                        Bienvenue {{ auth()->user()->name ?? 'utilisateur' }} !<br>
                        Vous êtes connecté à votre espace de gestion des notes.
                    </p>
                </div>
            @elseif($activeSection === 'eleves')
                <h1 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Gestion des Élèves</h1>
                <p class="text-gray-600 dark:text-gray-400">Ici vous pourrez voir, ajouter et modifier les élèves...
                </p>
            @elseif($activeSection === 'classes')
                <h1 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Gestion des Classes</h1>
                <p class="text-gray-600 dark:text-gray-400">Création, modification des classes et affectation des
                    élèves...</p>
            @elseif($activeSection === 'notes')
                <h1 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Saisie des Notes</h1>
                <p class="text-gray-600 dark:text-gray-400">Formulaire de saisie des notes par matière et par élève...
                </p>
            @elseif($activeSection === 'bulletins')
                <h1 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Bulletins Scolaires</h1>
                <p class="text-gray-600 dark:text-gray-400">Génération et visualisation des bulletins...</p>
            @elseif($activeSection === 'stats')
                <h1 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Statistiques & Analyses</h1>
                <p class="text-gray-600 dark:text-gray-400">Graphiques, moyennes, tendances...</p>
            @else
                <h1 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Section en cours</h1>
                <p>Section sélectionnée : <strong>{{ $activeSection }}</strong></p>
            @endif
        </div>
    </main>
</div> --}}


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
                <h1 class="mb-6 text-3xl font-bold">Tableau de bord</h1>
                <p>Bienvenue dans votre espace de gestion des notes !</p>
            @elseif($activeSection === 'eleves')
                <h1 class="mb-6 text-3xl font-bold">Élèves</h1>
                <p>Gestion des élèves ici...</p>
            @else
                <h1 class="mb-6 text-3xl font-bold">Section : {{ $activeSection }}</h1>
            @endif
        </div>
    </main>
</div>
