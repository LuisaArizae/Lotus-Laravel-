<?php
namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        // Inicializar la variable $datos
        $datos = [];
    
        // Manejar el filtro
        if ($request->has('filter')) {
            switch ($request->filter) {
                case 'completed':
                    // Consultar tareas finalizadas
                    $datos = DB::select("SELECT * FROM Tasks WHERE isDone = 1");
                    break;
    
                case 'notcompleted':
                    // Consultar tareas sin finalizar
                    $datos = DB::select("SELECT * FROM Tasks WHERE isDone = 0");
                    break;
    
                case 'old':
                    // Consultar tareas más antiguas
                    $datos = DB::select("SELECT * FROM Tasks WHERE created_at < CURDATE() ORDER BY created_at ASC;");
                    break;
    
                default:
                    $datos = DB::select("SELECT * FROM Tasks");
                    break;
            }
        } else {
            $datos = DB::select("SELECT * FROM Tasks");
        }
    
        return view('home')->with("datos", $datos);
    }
    

    public function create(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'txttitle' => 'required|string|max:255',
            'txtdescription' => 'nullable|string',
            'isDone' => 'boolean',
        ]);

        // Insertar en la entidad Tasks en la DB
        $sql = DB::insert("INSERT INTO Tasks (title, descrip, isDone, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())", [
            $request->txttitle,
            $request->txtdescription,
            $request->input('isDone', false),
        ]);

        if ($sql) {
            return back()->with("correcto", "Tarea creada con éxito.");
        } else {
            return back()->with("Error", "Error al crear la tarea.");
        }
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'txttitle' => 'required|string|max:255',
            'txtdescription' => 'nullable|string',
        ]);

        // Actualizar la tarea en la base de datos usando SQL
        $sql = DB::update("UPDATE Tasks SET title = ?, descrip = ?, updated_at = NOW() WHERE id = ?", [
            $request->txttitle,
            $request->txtdescription,
            $id,
        ]);

        if ($sql) {
            return back()->with("correcto", "Tarea actualizada con éxito.");
        } else {
            return back()->with("Error", "Error al actualizar la tarea.");
        }
    }
    public function delete($id)
{
    // Eliminar la tarea de la base de datos 
    $sql = DB::delete("DELETE FROM Tasks WHERE id = ?", [$id]);

    if ($sql) {
        return back()->with("correcto", "La tarea se ha eliminado con éxito.");
    } else {
        return back()->with("Error", "Error al eliminar la tarea.");
    }
}

    public function filled($id)
    {
        // Actualizar el estado de la tarea
        $sql = DB::update("UPDATE Tasks SET isDone = 1, updated_at = NOW() WHERE id = ?", [$id]);

        if ($sql) {
            return back()->with("correcto", "Felicidades has completado tu tarea!!.");
        } else {
            return back()->with("Error", "Error al marcar la tarea.");
        }
 }


}
