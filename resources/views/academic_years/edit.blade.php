@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Modifier l'année académique</h1>

        {{-- Affichage des erreurs --}}
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulaire d'édition --}}
        <form method="POST" action="{{ route('academic-years.update', $academicYear) }}" class="space-y-4">
            @csrf
            @method('PUT')

            {{-- Libellé --}}
            <div>
                <label class="block text-gray-700 font-medium">Libellé</label>
                <input type="text" name="libelle" value="{{ old('libelle', $academicYear->libelle) }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300"
                    required>
            </div>

            {{-- Date début --}}
            <div>
                <label class="block text-gray-700 font-medium">Date début</label>
                <input type="date" name="date_debut"
                    value="{{ old('date_debut', \Carbon\Carbon::parse($academicYear->date_debut)->format('Y-m-d')) }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300"
                    required>
            </div>

            {{-- Date fin --}}
            <div>
                <label class="block text-gray-700 font-medium">Date fin</label>
                <input type="date" name="date_fin"
                    value="{{ old('date_fin', \Carbon\Carbon::parse($academicYear->date_fin)->format('Y-m-d')) }}"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300"
                    required>
            </div>

            {{-- Année active --}}
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="is_active" id="is_active"
                    {{ old('is_active', $academicYear->is_active) ? 'checked' : '' }}
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="is_active" class="text-gray-700 font-medium">Année active</label>
            </div>

            {{-- Boutons --}}
            <div class="flex justify-between mt-6">
                <a href="{{ route('academic-years.index') }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Annuler</a>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
