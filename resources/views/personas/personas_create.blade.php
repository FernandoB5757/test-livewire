<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ isset($persona) ? 'Editar' : 'Crear' }} nuevo </h1>
    <ul>
        <li><x-jet-dropdown-link href="{{ route('dashboard') }}">
            {{ __('Regresar') }}
            </x-jet-dropdown-link>
        </li>
    </ul>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif

    <!--Condicional para create o update-->
        @if (@isset($persona))
            <form  action="{{ route('persona.update', $persona)}}" method="POST">
                @method('PATCH')
        @else
            <form  action="{{ route('persona.store') }}" method="POST">
        @endif
        @csrf
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" value="{{ $persona->nombre ?? ''}}"  required>
            <br>
            <label for="apellido_paterno">Apellido paterno:</label><br>
            <input type="text" name="apellido_paterno" value="{{ $persona->apellido_paterno ?? ''}}" required>
            <br>
            <label for="apellido_paterno">Apellido materno:</label><br>
            <input type="text" name="apellido_materno" value="{{ $persona->apellido_materno ?? ''}}">
            <br>
            <label for="telefono">Telefono:</label><br>
            <input type="text" name="telefono" id = "telefono" value="{{ $persona->telefono ?? ''}}" required>
            <br>
            <label for="correo">Correo:</label><br>
            <input type="email" name="correo" value="{{ $persona->correo ?? ''}}"  required>
            <br>
            <label for="identificador">Identificador:</label><br>
            <input type="text" name="identificador" value="{{ $persona->identificador ?? ''}}"  required>
            <br>
            <br>
            <label for="area_id">Area:</label>
            {{-- {{ array_search($area->id, $persona->areas->pluck('id')->toArray()) === false?'' : 'selected'}} --}}
            <select name="area_id[]" id="area_id" multiple>
                @foreach ($areas as $area )
                    <option value="{{ $area->id }}"  {{ array_search($area->id,$persona->areas->pluck('id')->toArray())=== false ? '' : 'selected' }}>
                        {{ $area->nombre_area }}
                    </option>

                @endforeach
            </select>
            <br><br>
            <input type="submit" name="Guardar" id="guardar" value="Save">

        </form>

    </body>
</html>
