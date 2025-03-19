
<!DOCTYPE html>
<html>
<head>
    <title>Import Excel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<style>
    nav {
    padding: 15px 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

nav a {
    background-color: white;
    color: #1F7D53;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 20px;
    border-radius: 8px;
    border: 2px solid #1F7D53;
    transition: all 0.3s ease-in-out;
}

nav a:hover {
    background-color: #1F7D53;
    color: white;
    border-color: #1F7D53;
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
</style>
<body>
    <nav>
        <a href="{{ route('avancement.module') }}">Avancement Par Module</a>
        <a href="{{ route('nombre.efm.group') }}">Nombre EFM Par Group</a>
        <a href="{{ route('avencementParGroup.group') }}">Avencement Par Group</a>
        <a href="{{ route('import.handle') }}">Importer depuis Excel
        </a>
    </nav>

<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="fa fa-star"></i> Importer votre fichier Excel ici</h3>
        <div class="card-body">

            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
            @endsession

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('Formateur.import') }}" method="POST" enctype="multipart/form-data" >
                @csrf

                <input type="file" name="file" class="form-control">

                <br>
                <button class="btn btn-success"><i class="fa fa-file"></i> Importer</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
