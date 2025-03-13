<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>

    <!-- Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="container w-75 p-4">
        <h1 class="mb-4 text-center">📚 Lista de Estudiantes</h1>

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('estudiantes.create') }}" class="btn btn-custom">➕ Agregar Estudiante</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->id }}</td>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->correo }}</td>
                        <td>{{ $estudiante->telefono }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-info btn-sm px-3">
                                    👁️ Ver
                                </a>
                                <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-warning btn-sm px-3">
                                    ✏️ Editar
                                </a>
                                <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm px-3">🗑️ Eliminar</button>
                                </form>
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
