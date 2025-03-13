<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Style the table container */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-family: Arial, sans-serif;
    color: #333;
}

/* Style table headers */
th {
    background-color: #2c3e50;
    color: white;
    padding: 12px 15px;
    text-align: left;
    font-size: 16px;
    text-transform: uppercase;
}

/* Style table data cells */
td {
    padding: 10px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    font-size: 14px;
}

/* Hover effect for rows */
tr:hover {
    background-color: #f1f1f1;
}

/* Add some spacing between rows */
tbody tr {
    transition: background-color 0.3s ease;
}

/* Zebra striping for better readability */
tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

/* Style for the first column (Module) */
td:first-child {
    font-weight: bold;
}

/* Style for the last column (Volume Total) */
td:last-child {
    font-weight: bold;
    color: #e74c3c;
}

/* Style the table wrapper */
table-wrapper {
    overflow-x: auto;
    max-width: 100%;
    margin: 20px 0;
}

/* Make table responsive */
@media (max-width: 768px) {
    table {
        font-size: 12px;
    }

    th, td {
        padding: 8px;
    }
}

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Niveau</th>
                <th>Module</th>
                <th>Code Filiére</th>
                <th>Filière</th>
                <th>Créneau</th>
                <th>Groupes</th>
                <th>Type</th>
                <th>Mode</th>
                <th>Régional</th>
                <th>Volume Réalisé</th>
                <th>Volume Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $module)
            <tr>
                <td>{{ $module->Niveau }}</td>
                <td>{{ $module->Module }}</td>
                <td>{{ $module->code_filiere }}</td>
                <td>{{ $module->Filiere }}</td>
                <td>{{ $module->creneau}}</td>
                <td>{{ $module->Groupes }}</td>
                <td>{{ $module->Type_de_Formation }}</td>
                <td>{{ $module->Mode }}</td>
                <td>{{ $module->regional}}</td>
                <td>{{ $module->MHT_Realisé }}</td>
                <td>{{ $module->MHT }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
