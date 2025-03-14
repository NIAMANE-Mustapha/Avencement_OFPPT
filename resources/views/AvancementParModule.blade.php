<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avancement Par Module</title>
  <style>
body {
    font-family: 'Arial', sans-serif;
    color: #333;
}

h1 {
    font-size: 2rem; /* Smaller font size for the heading */
    color: #007bff;
    text-align: center;
    margin-bottom: 20px; /* Reduced margin */
}

.container {
    margin: 0 auto;
    padding: 10px; /* Add some padding */
}

table {
    width: 100%; /* Full width within the container */
    border-collapse: collapse;
    font-size: 0.9rem; /* Smaller font size for the table */
}

th, td {
    padding: 8px 8px; /* Smaller padding */
    text-align: left;
}

th {
    background-color: #007bff;
    color: white;
    font-weight: bold;
    font-size: 0.9rem; /* Smaller font size for headers */
}

td {
    background-color: #ffffff;
    border-bottom: 1px solid #ddd;
    font-size: 0.85rem; /* Smaller font size for table data */
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
        font-size: 1.5rem; /* Smaller font size for mobile */
    }

    .container {
        padding: 10px; /* Smaller padding for mobile */
    }

    table {
        font-size: 0.8rem; /* Smaller font size for mobile */
    }

    th, td {
        padding: 6px 8px; /* Smaller padding for mobile */
    }

    .table th, .table td {
        text-align: center;
    }
}
</style>
</head>
<body>
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
                        <td>{{ ($module->total_MHT_realisées/$module->module->MHT_total)*100 }}%</td>
                        <td>{{ $module->module->MHT_total -$module->total_MHT_realisées }}</td>
                        <td>{{ (($module->module->MHT_total -$module->total_MHT_realisées)/$module->module->MHT_total)*100 }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
