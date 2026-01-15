<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Gestion des notes et bulletins scolaires - Plateforme sécurisée pour enseignants, étudiants et parents">

    <title>{{ config('app.name', 'GestNotes') }} - Gestion des notes scolaires</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen antialiased text-gray-900 bg-gray-50 dark:bg-gray-950 dark:text-gray-100">

    <!-- Header / Navigation -->
    <header
        class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm dark:bg-gray-900/95 backdrop-blur-sm dark:border-gray-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 md:h-20">
                <!-- Logo + Nom -->
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center w-10 h-10 text-2xl font-bold text-white shadow-md bg-gradient-to-br from-indigo-600 to-blue-600 rounded-xl">
                        GN
                    </div>
                    <span class="text-xl font-bold tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        GestNotes
                    </span>
                </div>

                <!-- Navigation -->
                <nav class="flex items-center gap-4 md:gap-8">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="hidden md:inline-flex items-center px-6 py-2.5 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors shadow-sm">
                            Mon espace
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="px-5 py-2 font-medium text-white transition-colors bg-indigo-600 rounded-lg md:hidden hover:bg-indigo-700">
                            Espace
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-medium text-gray-700 transition-colors dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                            Connexion
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-blue-600 text-white font-medium rounded-lg hover:from-indigo-700 hover:to-blue-700 transition-all shadow-md hover:shadow-lg">
                                Inscription
                            </a>
                        @endif
                    @endauth
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section
        class="relative py-20 overflow-hidden bg-gradient-to-br from-indigo-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800 md:py-32">
        <!-- Fond décoratif subtil -->
        <div class="absolute inset-0 pointer-events-none opacity-10 dark:opacity-5">
            <div class="absolute bg-indigo-300 rounded-full -top-40 -right-40 w-96 h-96 blur-3xl"></div>
            <div class="absolute bg-blue-300 rounded-full -bottom-40 -left-40 w-96 h-96 blur-3xl"></div>
        </div>

        <div class="relative px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
            <h1
                class="mb-6 text-4xl font-extrabold leading-tight tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Gestion moderne des notes<br>et des bulletins scolaires
            </h1>

            <p
                class="max-w-3xl mx-auto mb-10 text-lg leading-relaxed text-gray-700 md:text-xl dark:text-gray-300 md:mb-12">
                Une solution complète pour les établissements scolaires, enseignants, étudiants et parents :<br>
                saisie des notes, calculs automatiques, bulletins, statistiques et suivi des performances.
            </p>

            <div class="flex flex-col justify-center gap-5 sm:flex-row md:gap-6">
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex items-center justify-center px-8 py-4 bg-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:bg-indigo-700 transition-all duration-300 transform hover:scale-[1.03] hover:shadow-xl text-lg">
                        Accéder à mon espace
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-gray-900 transition-all duration-300 bg-white border border-gray-300 shadow-md dark:bg-gray-800 dark:border-gray-600 dark:text-white rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700">
                        Se connecter
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-blue-600 text-white font-semibold rounded-xl shadow-lg hover:from-indigo-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-[1.03] hover:shadow-xl text-lg">
                            Créer un compte
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </section>

    <!-- Features / Avantages -->
    <section class="py-20 bg-white md:py-28 dark:bg-gray-900">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-16 text-center md:mb-20">
                <h2 class="mb-5 text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    Pourquoi choisir GestNotes ?
                </h2>
                <p class="max-w-3xl mx-auto text-lg text-gray-600 dark:text-gray-400">
                    Une plateforme pensée pour simplifier la vie des établissements scolaires et améliorer le suivi
                    pédagogique
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 md:gap-10 lg:gap-12">
                <!-- Feature 1 -->
                <div
                    class="p-8 transition-all duration-300 border border-gray-100 bg-gray-50 dark:bg-gray-800/50 rounded-2xl dark:border-gray-700 hover:border-indigo-200 dark:hover:border-indigo-800 hover:shadow-lg group">
                    <div
                        class="flex items-center justify-center mb-6 transition-transform bg-indigo-100 w-14 h-14 dark:bg-indigo-900/40 rounded-xl group-hover:scale-110">
                        <svg class="text-indigo-600 w-7 h-7 dark:text-indigo-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Saisie intuitive</h3>
                    <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                        Interface claire et rapide pour saisir les notes, appréciations et coefficients.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="p-8 transition-all duration-300 border border-gray-100 bg-gray-50 dark:bg-gray-800/50 rounded-2xl dark:border-gray-700 hover:border-indigo-200 dark:hover:border-indigo-800 hover:shadow-lg group">
                    <div
                        class="flex items-center justify-center mb-6 transition-transform bg-blue-100 w-14 h-14 dark:bg-blue-900/40 rounded-xl group-hover:scale-110">
                        <svg class="text-blue-600 w-7 h-7 dark:text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Bulletins automatiques</h3>
                    <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                        Génération instantanée des bulletins avec moyennes, classements et mentions.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="p-8 transition-all duration-300 border border-gray-100 bg-gray-50 dark:bg-gray-800/50 rounded-2xl dark:border-gray-700 hover:border-indigo-200 dark:hover:border-indigo-800 hover:shadow-lg group">
                    <div
                        class="flex items-center justify-center mb-6 transition-transform bg-green-100 w-14 h-14 dark:bg-green-900/40 rounded-xl group-hover:scale-110">
                        <svg class="text-green-600 w-7 h-7 dark:text-green-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Statistiques & Analyses</h3>
                    <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                        Graphiques, tendances, classements par classe/matière et suivi des progrès.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 mt-auto bg-gray-100 border-t border-gray-200 dark:bg-gray-900/80 dark:border-gray-800">
        <div class="px-4 mx-auto text-center text-gray-600 max-w-7xl sm:px-6 lg:px-8 dark:text-gray-400">
            <p class="text-sm">
                © {{ date('Y') }} GestNotes — Tous droits réservés
            </p>
            <p class="mt-2 text-sm">
                Une solution Laravel + Tailwind CSS pour la gestion scolaire moderne
            </p>
        </div>
    </footer>

</body>

</html>
