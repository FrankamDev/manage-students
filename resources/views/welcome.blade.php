<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Mon Application') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen text-gray-900 bg-gray-50 dark:bg-gray-950 dark:text-gray-100">

    <!-- Header / Navigation -->
    <header
        class="sticky top-0 z-30 border-b border-gray-200 dark:border-gray-800 bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center justify-center text-xl font-bold text-white rounded-lg w-9 h-9 bg-gradient-to-br from-red-600 to-orange-600">
                        A
                    </div>
                    <span class="text-xl font-semibold tracking-tight">{{ config('app.name', 'App') }}</span>
                </div>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="px-5 py-2.5 bg-gray-900 dark:bg-white text-white dark:text-gray-900 font-medium rounded-lg hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors shadow-sm">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-5 py-2.5 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white font-medium transition-colors">
                            Connexion
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-5 py-2.5 bg-gradient-to-r from-red-600 to-orange-600 text-white font-medium rounded-lg hover:from-red-700 hover:to-orange-700 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                Créer un compte
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex items-center justify-center flex-grow px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-3xl space-y-10 text-center">

            @auth
                <!-- Utilisateur déjà connecté -->
                <div class="space-y-6">
                    <h1 class="text-4xl font-bold tracking-tight sm:text-5xl">
                        Bienvenue {{ auth()->user()->name }} !
                    </h1>

                    <p class="max-w-2xl mx-auto text-xl text-gray-600 dark:text-gray-400">
                        Vous êtes connecté. Prêt à commencer ?
                    </p>

                    <div class="flex flex-wrap justify-center gap-4 pt-4">
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center px-8 py-4 text-lg font-semibold text-white transition-all transform shadow-lg bg-gradient-to-r from-red-600 to-orange-600 rounded-xl hover:from-red-700 hover:to-orange-700 hover:scale-105 hover:shadow-xl">
                            Aller au Dashboard
                            <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            @else
                <!-- Non connecté - invitation à se connecter -->
                <div class="space-y-8">
                    <h1
                        class="text-4xl font-extrabold tracking-tight text-transparent sm:text-6xl bg-clip-text bg-gradient-to-r from-red-600 to-orange-600">
                        Bienvenue
                    </h1>

                    <p class="max-w-2xl mx-auto text-xl leading-relaxed text-gray-600 sm:text-2xl dark:text-gray-400">
                        Connectez-vous pour accéder à votre espace personnel et découvrir toutes les fonctionnalités de
                        l'application.
                    </p>

                    <div class="flex flex-col justify-center gap-5 pt-6 sm:flex-row">
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center justify-center px-10 py-4 text-lg font-semibold text-gray-900 transition-colors bg-white border border-gray-300 shadow-md dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700">
                            Se connecter
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-flex items-center justify-center px-10 py-4 text-lg font-semibold text-white transition-all transform shadow-lg bg-gradient-to-r from-red-600 to-orange-600 rounded-xl hover:from-red-700 hover:to-orange-700 hover:shadow-xl hover:scale-105">
                                Créer un compte
                            </a>
                        @endif
                    </div>

                    <p class="pt-8 text-sm text-gray-500 dark:text-gray-600">
                        Une application Laravel • Tailwind CSS • Simple • Moderne
                    </p>
                </div>
            @endauth

        </div>
    </main>

    <!-- Footer minimal -->
    <footer
        class="py-6 text-sm text-center text-gray-500 border-t border-gray-200 dark:border-gray-800 dark:text-gray-600">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            © {{ date('Y') }} {{ config('app.name', 'Laravel') }} — Tous droits réservés
        </div>
    </footer>

</body>

</html>
