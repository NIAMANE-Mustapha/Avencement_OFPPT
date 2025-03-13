<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="my-4">Formation Details</h1>

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
            </tr>
        </thead>
        <tbody>
            @foreach ($formation as $result)
            <tr>
                <td>{{ $result->Niveau }}</td>
                <td>{{ $result->Secteur }}</td>
                <td>{{ $result->CodeFiliere }}</td>
                <td>{{ $result->Filiere }}</td>
                <td>{{ $result->TypeDeFormation }}</td>
                <td>{{ $result->Creneau }}</td>
                <td>{{ $result->Groupe }}</td>
                <td>{{ $result->EffectifGroupe }}</td>
                <td>{{ $result->AnneeDeFormation }}</td>
                <td>{{ $result->Mode }}</td>
                <td>{{$result->MHTotale1}}</td>
                <td>{{$result->MHTotaleRealisee2}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

