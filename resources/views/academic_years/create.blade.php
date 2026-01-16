@extends('layouts.app')

@section('content')
    <div class="max-w-3xl p-6 mx-auto bg-white rounded shadow">
        <h1 class="mb-6 text-2xl font-bold">Nouvelle année académique</h1>

        <form method="POST" action="{{ route('academic-years.store') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block font-medium">Libellé</label>
                <input type="text" name="name" class="w-full px-3 py-2 border rounded" placeholder="2024-2025" required>
            </div>

            <div>
                <label class="block font-medium">Date début</label>
                <input type="date" name="date_debut" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div>
                <label class="block font-medium">Date fin</label>
                <input type="date" name="date_fin" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="is_active" value="1" class="mr-2">
                <label>Définir comme année active</label>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('academic_years.index') }}" class="px-4 py-2 bg-gray-300 rounded">
                    Annuler
                </a>
                <button class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
@endsection
