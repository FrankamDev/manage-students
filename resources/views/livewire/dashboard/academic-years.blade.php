<div class="p-6 mx-auto max-w-7xl">

    <h1 class="mb-4 text-2xl font-bold">Années académiques</h1>

    {{-- Formulaire --}}
    <form wire:submit.prevent="save" class="p-4 mb-6 bg-white rounded shadow">
        <input type="text" wire:model.defer="libelle" placeholder="Nom" class="p-2 mr-2 border">
        <input type="date" wire:model.defer="date_debut" class="p-2 mr-2 border">
        <input type="date" wire:model.defer="date_fin" class="p-2 mr-2 border">
        <label class="mr-2">
            <input type="checkbox" wire:model.defer="is_active"> Active
        </label>
        <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded">
            {{ $academicYearId ? 'Mettre à jour' : 'Créer' }}
        </button>
    </form>

    {{-- Tableau --}}
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-sm text-left text-gray-500 uppercase">Nom</th>
                    <th class="px-6 py-3 text-sm text-left text-gray-500 uppercase">Début</th>
                    <th class="px-6 py-3 text-sm text-left text-gray-500 uppercase">Fin</th>
                    <th class="px-6 py-3 text-sm text-left text-gray-500 uppercase">Active</th>
                    <th class="px-6 py-3 text-sm text-left text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($academicYears as $year)
                    <tr>
                        <td class="px-6 py-4">{{ $year->libelle }}</td>
                        <td class="px-6 py-4">{{ $year->date_debut }}</td>
                        <td class="px-6 py-4">{{ $year->date_fin }}</td>
                        <td class="px-6 py-4">{{ $year->is_active ? 'Oui' : 'Non' }}</td>
                        <td class="px-6 py-4 space-x-2">
                            <button wire:click="edit({{ $year->id }})"
                                class="text-blue-600 hover:underline">Modifier</button>
                            <button wire:click="delete({{ $year->id }})"
                                class="text-red-600 hover:underline">Supprimer</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
