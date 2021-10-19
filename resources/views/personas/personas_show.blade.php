<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Informacion de {{ $persona->nombre }}</h1>
    <a href="{{ route('persona.index') }}">Listado de Personas</a>
    <ul>
        <li>Código: {{ $persona->identificador }}</li>
        <li>Nombre: {{ $persona->nombre }}</li>
        <li>Apellido Paterno: {{ $persona->apellido_paterno }}</li>
        <li>Apellido Materno: {{ $persona->apellido_materno }}</li>
        <li>Teléfono: {{ $persona->telefono }}</li>
        <li>Correo: {{ $persona->correo }}</li>
    </ul>
<<<<<<< HEAD
    <hr>
    Usuario Creador: {{ $persona->user->name }} ({{ $persona->user->email }})
    <hr>
    <a href="{{ route('persona.edit', $persona) }}">Editar</a>
    <hr>
    <form action="{{ route('persona.destroy', $persona) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">

    </form>
    <hr>
=======
    <br>
    <br>
        {{ $persona->user()->firts()->name }}
    <br>
    <hr>
    <a href="{{ route('persona.edit', $persona) }}">Editar</a>
    <hr>
    <form action="{{ route ('persona.destroy'), $persona }}" method = "POST">
        @csrf
        @method('DELETE')
        <input type="submit" value = "Borrar">
    </form>
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
</body>
</html>
