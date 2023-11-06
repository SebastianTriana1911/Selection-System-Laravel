<?php
namespace App\Http\Controllers;

// Se importa el modelo de Ocupaciones que hace referencia a la tabla
use App\Models\Ocupaciones;

use Illuminate\Http\Request;

class OcupacionesControllers extends Controller{
    
    // Metodo index que llama desde la base de datos los registros que
    // hay en ella con el metodo all()
    public function index(){
        
        // Se le asigna a una variable todos los registros que haya en
        // la tabla Ocupaciones
        $ocupacion = Ocupaciones::all();

        // Se retorna una vista y para poder mostrar en ella los diferentes
        // campos a una variable se le asigna la variable que contiene todos
        // los registros
        return view("ocupacion.index", ["ocupacion" => $ocupacion]);
    }


    // Metodo create retorna una vista que contiene el formulario para
    // insertar datos
    public function create(){
        return view("ocupacion.create");
    }


    // Metodo show mostrara todos los datos que contiene una ocupacion, se necesita un
    // parametro pero el parametro se asigna desde la vista al querer acceder al 
    // registro completo de dicha ocupacion, se necesita el campo primario de la tabla
    // para saber que registro mostrar
    public function show($id){

        // Como deseamos hayar los registros dependiendo de la Ocupacion que queremos, con
        // el metodo estatico find() podremos acceder al los registros completos pasandole
        // como parametro el campo primario del registro
        $ocupacion = Ocupaciones::find($id);
        return view("ocupacion.show", ["ocupacion" => $ocupacion]);
    }


    // Metodo store recibe como parametro la palabra reservada Request
    // y una variable llamada $request que toma todos los datos que se
    // han mandado desde el formulario
    public function store(Request $request){

        // Intancia del modelo Ocupaciones
        $ocupacion = new Ocupaciones;

        // A la intancia en el campo codigo_ocupacion se le asigna el
        // valor que haya en la variable request en el campo codigo_ocupacion
        $ocupacion -> codigo_ocupacion = $request -> codigo_ocupacion;
        $ocupacion -> nombre_ocupacion = $request -> nombre_ocupacion;
        $ocupacion -> descripcion = $request -> descripcion;

        // Se salva la intancia del modelo para subirla a la base de datos
        $ocupacion -> save();

        // Se retorna una redireccion a una ruta pasada como parametro del 
        // metodo route
        return redirect()->route("index.ocupaciones");
    }
}
