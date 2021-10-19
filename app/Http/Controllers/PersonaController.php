<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Persona;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        //$this->middleware('auth');
        //$this->middleware('auth')->only('show');
    }
    public function index()
    {
<<<<<<< HEAD
        $personas = Persona::all();//muestra todo
        //$personas = Persona::where('user_id',Auth::id())->get();//muestra con condicion
        //$personas = Persona::with('areas')->get();//muestra las relaciones con area
        //$personas = Auth::user()->personas()->get();//solo los que agrego el usuario actual

=======
        //$personas = Persona::all();
        //$personas = Persona::where('user_id', Auth::id()); //un caso
        $personas = Auth::user()->personas; //segundo caso
        //$personas = Auth::user()->personas()->where()->get()//tercer caso;
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
        return view('personas.personas_listado',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('personas.personas_create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required | max:255',
            'apellido_paterno' => 'required | max:255',
            'apellido_materno' => ' max:255',
            'correo' => 'required | email | unique:personas,correo',
            'telefono' => 'required | max:15',
            'identificador' => 'required | max:255 | unique:personas,identificador',
        ]);

<<<<<<< HEAD
        //crear registro con modelo
        //validar campos no asignado
        $request->merge([
            'user_id' =>Auth::id(),//agregar Id de usuario registrado
            'apellido_materno' => $request->apellido_materno ?? '',
        ]);
        $persona = Persona::create($request->all());//importante poner nombres de input igual que el de la base de datos
        $persona->areas()->attach($request->area_id);//Para insertar en la tabla pivote


        //crear registro forma normal
        /*$persona = new Persona();
=======
        $request ->merge([
        //    'user_id' => Auth::id(),
            //'apellido_m'=> $request->apellido_m
        ]);

        //$persona = new Persona($request->all());
        //Auth::User()->personas()->save($persona);

        $persona = new Persona();
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_p;
        $persona->apellido_materno = $request->apellido_m ?? '';
        $persona->telefono = $request->telefono ?? '';
        $persona->correo = $request->correo;
        $persona->identificador = $request->identificador;
        $persona->save();
        */
        /*
        DB::table('personas')->insert([
            'nombre' => $request->nombre,
            'apellido_paterno'=> $request->apellido_paterno,
            'apellido_materno'=> $request->apellido_materno,
            'telefono'=> $request->telefono,
            'correo'=> $request->correo,
            'identificador'=> $request->identificador,
            'create_at'=> now(),
            'updated_at'=> now(),
        ]);
        */
        return redirect()->route('persona.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return(view('personas.personas_show', compact('persona')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        $areas = Area::all();
        return view('personas.personas_create', compact('persona','areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required | max:255',
            'apellido_paterno' => 'required | max:255',
            'apellido_materno' => ' max:255',
            'telefono' => 'required | max:15',
            'correo' => ['required',
                'email',
                Rule::unique('personas')->ignore($persona->id),//ignora el
            ],
            'identificador' => [
                'required',
                'max:255',
             Rule::unique('personas')->ignore($persona->id),//ignora el unique del identificador de este Id
            ],
        ]);

        //crear registro con modelo
        //validar campos no asignado
        $request->merge([
            'apellido_materno' => $request->apellido_materno ?? ''
        ]);
        Persona::where('id', $persona->id)->update($request->except('_token','_method','Guardar','area_id'));

        $persona->areas()->sync($request->area_id);
        /*
        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_p;
        $persona->apellido_materno = $request->apellido_m ?? '';
        $persona->telefono = $request->telefono ?? '';
        $persona->correo = $request->correo;
        $persona->identificador = $request->identificador;
        $persona->save();
        */

        return redirect()->route('persona.show',$persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
<<<<<<< HEAD
        //dd('llego a metodo') //lego a metodo
        $persona->delete();
        return redirect()->route('persona.index');

=======
        //dd('llego a metodo');
        $persona->delete();
        return redirect()->route('persona.index');
>>>>>>> 39fd82dca7c4ba2fbd9a3c134e2f1010dd8530f7
    }
}
