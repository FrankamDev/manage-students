<h1 class="bg-red-600">Années académiques</h1>

<a href="{{ route('academic-years.create') }}">➕ Nouvelle année</a>

<table border="1" cellpadding="8">
    <thead class="border bg-cyan-300">
        <tr>
            <th>Libellé</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($academicYears as $year)
            <tr>
                <td>{{ $year->libelle }}</td>
                <td>{{ $year->date_debut }}</td>
                <td>{{ $year->date_fin }}</td>
                <td>
                    {{ $year->is_active ? 'Oui' : 'Non' }}
                </td>
                <td>
                    <a href="{{ route('academic-years.edit', $year) }}">✏️ Modifier</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
