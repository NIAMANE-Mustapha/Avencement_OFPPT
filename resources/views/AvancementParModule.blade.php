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
    color: #4D55CCw;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 8px;
    border: 2px solid #4D55CC;
    transition: all 0.3s ease-in-out;
}

nav a:hover {
    background-color: #4D55CC;
    color: white;
    border-color: #4D55CC;
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
    color: #4D55CC;
    font-size: 28px;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.container {
    margin: 0 auto;
    padding: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.9rem;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);

}

th, td {
    padding: 6px 6px;
    border-bottom: 1px solid #ddd;text-align: center;

}

th {
    background-color: #4D55CC;
    color: white;
    font-weight: bold;
    font-size: 0.9rem;
}

td {
    background-color: #ffffff;
    border-bottom: 1px solid #ddd;
    font-size: 0.85rem;
}

tr:nth-child(even) td {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f1f1f1;
}

.table-bordered {
    border: 1px solid #ddd;
}

.table-bordered th, .table-bordered td {
    border: 1px solid #ddd;
}

.table th, .table td {
    text-align: center;
}

@media (max-width: 768px) {
    h1 {
        font-size: 1.5rem;
    }

    .container {
        padding: 10px;
    }

    table {
        font-size: 0.8rem;
    }

    th, td {
        padding: 6px 8px;
    }

    .table th, .table td {
        text-align: center;
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
        <h1>Avancement Par Module</h1>
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
                    <th>Régional</th>
                    <th>MH Totale</th>
                    <th>MH Réalisée</th>
                    <th>% de Réalisation</th>
                    <th>Ecart</th>
                    <th>Ecart en % </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $module)
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
                        <td>{{ $module->module->regional }}</td>
                        <td>{{ $module->module->MHT_total }}</td>
                        <td>{{ $module->total_MHT_realisées }}</td>
                        <td>{{ number_format(($module->total_MHT_realisées / $module->module->MHT_total) * 100, 2) }}%</td>
                        <td>{{ $module->module->MHT_total -$module->total_MHT_realisées }}</td>
                        <td>{{ number_format((($module->module->MHT_total -$module->total_MHT_realisées)/$module->module->MHT_total)*100,2) }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
