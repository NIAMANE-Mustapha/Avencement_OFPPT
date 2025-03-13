<table>
    <thead>
        <tr>
            <th>Module</th>
            <th>Filière</th>
            <th>Groupes</th>
            <th>Niveau</th>
            <th>Type</th>
            <th>Mode</th>
            <th>Volume Réalisé</th>
            <th>Volume Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($modules as $module)
        <tr>
            <td>{{ $module->Module }}</td>
            <td>{{ $module->Filiere }}</td>
            <td>{{ $module->Groupes }}</td>
            <td>{{ $module->Niveau }}</td>
            <td>{{ $module->Type_de_Formation }}</td>
            <td>{{ $module->Mode }}</td>
            <td>{{ $module->MHT_Realisé }}</td>
            <td>{{ $module->MHT }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
