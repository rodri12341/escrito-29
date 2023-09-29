<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarea;

class tareaController extends Controller
{
    public function listarTareas(Request $request){
        return tarea::all();
    }

    public function listarUnaTarea(Request $request,$IdTarea){
        return tarea::findOrFail($IdTarea);
    }

    public function insertarTarea(Request $request){
        $Tarea = new tarea();
       
        $Tarea -> titulo = $request ->post("titulo");
        $Tarea -> contenido = $request ->post("contenido");
        $Tarea -> estado = $request ->post("estado");
        $Tarea -> autor = $request ->post("autor");
        
        $Tarea -> save();
                        
        return $Tarea;
    }

    public function modificarTarea(Request $request, $IdTarea){
        $Tarea = tarea::findOrFail($IdTarea);

        $Tarea -> titulo = $request ->post("titulo");
        $Tarea -> contenido = $request ->post("contenido");
        $Tarea -> estado = $request ->post("estado");
        $Tarea -> autor = $request ->post("autor");

        $Tarea -> save();

        return $Tarea;
    }

    public function eliminarTarea(Request $request, $IdTarea){

        $TareaSeleccionado = tarea::findOrFail($IdTarea);
        $TareaSeleccionado -> delete();
        
        return response([
            'message' => "tarea Eliminated Correctly"
        ]);
    }
}