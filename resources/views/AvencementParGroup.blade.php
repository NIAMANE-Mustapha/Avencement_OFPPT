<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avancement des Formations</title>
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
    background-color: #0A5EB0;
    color: white;
    border-color: #0A5EB0;
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
    color: #0A5EB0;
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
    padding: 4px 4px;
    border-bottom: 1px solid #ddd;text-align: center;

}

th {
    background-color: #0A5EB0;
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
    <h1>Etat d'avancement Programme  par Groupe</h1>
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
                <th>MH Totale (1)</th>
                <th>MH Totale Réalisée (2)</th>
                <th>% de Réalisation (2/1)</th>
                <th>Ecart (1-2) (3)</th>
                <th>Ecart en % (3/1)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->Niveau }}</td>
                    <td>{{ $row->Secteur }}</td>
                    <td>{{ $row->Code_Filiere }}</td>
                    <td>{{ $row->Filiere }}</td>
                    <td>{{ $row->Type_Formation }}</td>
                    <td>{{ $row->Creneau }}</td>
                    <td>{{ $row->Groupe }}</td>
                    <td>{{ $row->Effectif_Groupe }}</td>
                    <td>{{ $row->Annee_Formation }}</td>
                    <td>{{ $row->Mode }}</td>
                    <td>{{ $row->MH_Totale }}</td>
                    <td>{{ $row->MH_Totale_Realisee }}</td>
                    <td>{{ $row->Pourcentage_Realisation }}%</td>
                    <td>{{ $row->Ecart }}</td>
                    <td>{{ $row->Ecart_Pourcentage }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
