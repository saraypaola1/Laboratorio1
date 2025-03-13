<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="container">
        <h1 class="text-center mb-4">📄 Detalles del Estudiante</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold">Detalles del Estudiante</h5>
                <p class="fs-5"><span class="fw-bold">🧑 Nombre:</span> {{ $estudiante->nombre }}</p>
                <p class="fs-5"><span class="fw-bold">👨‍👩‍👦 Apellido:</span> {{ $estudiante->apellido }}</p>
                <p class="fs-5"><span class="fw-bold">📧 Correo:</span> {{ $estudiante->correo }}</p>
                <p class="fs-5"><span class="fw-bold">📞 Teléfono:</span> {{ $estudiante->telefono }}</p>
            </div>
        </div>
        
        <div class="mt-3">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">🔙 Volver</a>
            <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-warning">✏️ Editar</a>
            <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">🗑️ Eliminar</button>
            </form>
        </div>
    </div>

</body>
</html>
