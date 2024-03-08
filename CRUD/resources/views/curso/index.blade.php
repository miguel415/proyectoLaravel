<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>CRUDPosts</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('curso.index') }}>CRUD</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('curso.create') }}>Crear curso</a>
                </div>
            </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            @foreach ($cursos as $curso)
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $curso->titulo }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $curso->imagen }}</p>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $curso->descripcion }}</p>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{route('curso.edit', $curso->id)}}" 
                                    class="btn btn-primary btn-sm">Editar Curso
                                </a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('curso.destroy', $curso->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar Curso</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
