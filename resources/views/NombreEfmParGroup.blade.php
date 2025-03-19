
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avancement Par Module</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
body {
    font-family: 'Arial', sans-serif;
    color: #333;
}
nav {
    padding: 15px 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

nav a {
    background-color: white;
    color: #872341;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 8px;
    border: 2px solid #872341;
    transition: all 0.3s ease-in-out;
}

nav a:hover {
    background-color: #872341;
    color: white;
    border-color: #872341;
    transform: scale(1.05);
}

@media (max-width: 768px) {
    nav {
        flex-direction: column;
        align-items: center;
    }

    nav a {
        width: 100%;
        text-align: center;
    }
}

h1 {
    text-align: center;
    color: #872341;
    font-size: 28px;
    margin-bottom: 20px;
    text-transform: uppercase;
}


.table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    font-family: "Poppins", sans-serif;

}


.table thead {
    background-color: #872341;
    color: white;
}

.table th {
    padding: 7px;
    text-align: left;
    font-weight: bold;
}

.table td {
    padding: 6px;
    border-bottom: 1px solid #ddd;text-align: center;
}


.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}


.table tbody tr:hover {
    background-color: #e3f2fd;
    transition: 0.3s;
}

@media (max-width: 768px) {
    .table {
        font-size: 14px;
    }

    .table th, .table td {
        padding: 8px;
    }
}

</style>
</head>
<body>
    <nav>
        <a href="{{ route('avancement.module') }}">Avancement Par Module</a>
        <a href="{{ route('nombre.efm.group') }}">Nombre EFM Par Group</a>
        <a href="{{ route('avencementParGroup.group') }}">Avencement Par Group</a>
        <a href="{{ route('import.handle') }}">Importer depuis Excel</a>
    </nav>
    <div class="container">
        <h1>Nombre EFM par Groupes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Niveau</th>
                    <th>Secteur</th>
                    <th>Code Filière</th>
                    <th>Filière</th>
                    <th>Type de Formation</th>
                    <th>Créneau</th>
                    <th>Groupe</th>
                    <th>Effectif Groupe</th>
                    <th>Année de Formation</th>
                    <th>Mode</th>
                    <th>Code Module</th>
                    <th>Module</th>
                    <th>EFM Local</th>
                    <th>EFM Régional</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($groupes as $module)
                    <tr>
                        <td>{{ $module->groupe->filiere->formation->niveau_formation }}</td>
                        <td>{{ $module->groupe->filiere->secteur }}</td>
                        <td>{{ $module->groupe->filiere->code_filiere }}</td>
                        <td>{{ $module->groupe->filiere->nom_filiere }}</td>
                        <td>{{ $module->groupe->filiere->formation->type_formation }}</td>
                        <td>{{ $module->groupe->filiere->formation->creneau }}</td>
                        <td>{{ $module->groupe->nom_groupe }}</td>
                        <td>{{ $module->groupe->effectif_groupe }}</td>
                        <td>{{ $module->groupe->annee_formation }}</td>
                        <td>{{ $module->groupe->filiere->formation->mode_formation }}</td>
                        <td>{{ $module->module->code_module }}</td>
                        <td>{{ $module->module->nom_module }}</td>
                        <td>{{ $module->module->regional == 'N' ? 'Oui' : 'Non' }}</td>
                        <td>{{ $module->module->regional == 'O' ? 'Oui' : 'Non' }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
