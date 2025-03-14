<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avancement par Module</title>
    <style>
        /* Style de base pour le tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .percentage {
            color: #007bff;
            font-weight: bold;
        }

        .negative {
            color: #dc3545;
        }

        .positive {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="title">Avancement par Module</div>
    <table>
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
                <th>% Réalisation</th>
                <th>Écart</th>
                <th>Écart en %</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $module)
                <tr>
                    <td>{{ $module->groupe->filiere->niveau_formation }}</td>
                    <td>{{ $module->groupe->filiere->secteur }}</td>
                    <td>{{ $module->groupe->filiere->code_filiere }}</td>
                    <td>{{ $module->groupe->filiere->nom_filiere }}</td>
                    <td>{{ $module->groupe->filiere->type_formation }}</td>
                    <td>{{ $module->groupe->creneau }}</td>
                    <td>{{ $module->groupe->nom_groupe }}</td>
                    <td>{{ $module->groupe->effectif_groupe }}</td>
                    <td>{{ $module->groupe->annee_formation }}</td>
                    <td>{{ $module->groupe->filiere->mode_formation }}</td>
                    <td>{{ $module->module->code_module }}</td>
                    <td>{{ $module->module->nom_module }}</td>
                    <td>{{ $module->module->regional }}</td>
                    <td>{{ $module->module->MHT_total }}</td>
                    <td>{{ $module->total_MHT_realisées }}</td>
                    <td class="percentage">{{ number_format(($module->total_MHT_realisées / $module->module->MHT_total) * 100, 2) }}%</td>
                    <td>{{ $module->module->MHT_total - $module->total_MHT_realisées }}</td>
                    <td class="{{ ($module->module->MHT_total - $module->total_MHT_realisées) < 0 ? 'positive' : 'negative' }}">
                        {{ number_format((($module->module->MHT_total - $module->total_MHT_realisées) / $module->total_MHT_realisées) * 100, 2) }}%
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>