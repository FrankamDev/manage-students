<h1>Créer une année académique</h1>

<form method="POST" action="{{ route('academic-years.store') }}">
    @csrf

    <div>
        <label>Libellé</label><br>
        <input type="text" name="libelle" required>
    </div>

    <div>
        <label>Date début</label><br>
        <input type="date" name="date_debut" required>
    </div>

    <div>
        <label>Date fin</label><br>
        <input type="date" name="date_fin" required>
    </div>

    <div>
        <label>
            <input type="checkbox" name="is_active">
            Année active
        </label>
    </div>

    <button type="submit">Enregistrer</button>
</form>
