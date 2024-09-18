<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir y procesar archivo CSV</title>
</head>

<body>
    <h1>Nueva campaña</h1>

    <!-- Formulario para subir el archivo CSV -->

    <div class="container">
        <form class="form" action="{{ route('mensajes.store') }}" method="POST">
            @csrf
            <label for="titulo">Campaña</label>
            <input type="text" name="campaña">
            <br> <br>
            <label for="titulo">Clientes</label>
            <textarea name="contenido" rows="10" cols="100"></textarea>


            <br> <br>
            
            <button type="submit" class="btn btn-primary">Nuevo</button>

        </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>


</html>
