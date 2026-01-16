@extends('layouts.app')

@section('content')
    <div class="max-w-3xl p-6 mx-auto mt-10 bg-white rounded shadow">
        <h1 class="mb-6 text-2xl font-bold">Modifier l'année académique</h1>

        {{-- Affichage des erreurs --}}
        @if ($errors->any())
            <div class="p-4 mb-4 text-red-700 bg-red-100 rounded">
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
                <label class="block font-medium text-gray-700">Libellé</label>
                <input type="text" name="libelle" value="{{ old('libelle', $academicYear->libelle) }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300"
                    required>
            </div>

            {{-- Date début --}}
            <div>
                <label class="block font-medium text-gray-700">Date début</label>
                <input type="date" name="date_debut"
                    value="{{ old('date_debut', \Carbon\Carbon::parse($academicYear->date_debut)->format('Y-m-d')) }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300"
                    required>
            </div>

            {{-- Date fin --}}
            <div>
                <label class="block font-medium text-gray-700">Date fin</label>
                <input type="date" name="date_fin"
                    value="{{ old('date_fin', \Carbon\Carbon::parse($academicYear->date_fin)->format('Y-m-d')) }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300"
                    required>
            </div>

            {{-- Année active --}}
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="is_active" id="is_active"
                    {{ old('is_active', $academicYear->is_active) ? 'checked' : '' }}
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="is_active" class="font-medium text-gray-700">Année active</label>
            </div>

            {{-- Boutons --}}
            <div class="flex justify-between mt-6">
                <a href="{{ route('academic-years.index') }}"
                    class="px-4 py-2 text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Annuler</a>
                <button type="submit"
                    class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
