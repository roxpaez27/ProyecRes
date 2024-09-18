<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir y procesar archivo CSV</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1>Nueva campaña</h1>

    <!-- Formulario para subir el archivo CSV -->

    <div class="container">
        <form class="form">

            <a class="btn btn-warning mb-3" href="{{ route('mensajes.crear') }}" title="Crear nuevo mensaje">Nuevo
                Mensaje</a>

            <table class="table table-striped">
                <thead style="background-color:#117A65">
                    <th style="display: none;">ID</th>
                    <th style="color:#fff;">Campaña</th>
                    <th style="color:#fff;">Mensaje</th>
                    <th style="color:#fff;">Acciones</th>
                </thead>
                 <tbody>
                    @foreach ($mensajes as $mensaje)
                        <tr>
                            <td style="display: none;">{{ $mensaje->id }}</td>
                            <td>{{ $mensaje->campaña }}</td>
                            <td>{{ $mensaje->contenido }}</td>
                            <td>
                                <form action="{{ route('mensajes.destroy',$mensaje->id) }}" method="POST">                                        
                                  
                                    <a class="btn btn-info" href="{{ route('mensajes.editar',$mensaje->id) }}">Editar</a>
                                   
                                   
                                    @csrf
                                    @method('DELETE')
                                   
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                   
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
            </table>
            <div class="pagination justify-content-end">
                {!! $mensajes->links() !!}
            </div>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
