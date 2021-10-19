<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Personas</h1>
    <x-jet-dropdown-link href="{{ route('dashboard') }}">
        {{ __('Regresar') }}
        </x-jet-dropdown-link>
        <hr>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
<<<<<<< HEAD
                <td>Usuario</td>
                <td>Area(s)</td>
=======
                <th>Usuario Admin</th>
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Código</th>
                <th>Correo</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona )
            <tr>
                <td>
                    <a href="{{ route('persona.show', $persona->id ) }}">
                        {{ $persona->id }}
                    </a>
<<<<<<< HEAD
                </td>
                <td>{{ $persona->user->name }}</td>
                <td>
                    <ul>
                        @foreach ($persona->areas as $area)
                            <li>{{ $area->nombre_area }}</li>
                        @endforeach
                    </ul>
                </td>
=======
                <td>{{ $persona->user->name }} ( {{ $persona->user->email) }} )</td>
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->apellido_paterno }}</td>
                <td>{{ $persona->apellido_materno }}</td>
                <td>{{ $persona->identificador }}</td>
                <td>{{ $persona->correo }}</td>
                <td>{{ $persona->telefono }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
