<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MensajeController extends Controller
{
    public function index()
    {
        // $mensajes = Mensaje::paginate(10);
        $mensajes = Mensaje::paginate(10);
        return view('mensajes.index', compact('mensajes'));
    }

    public function crear()
    {
        return view('mensajes.crear');
    }



    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'campaña' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        // Crear el nuevo mensaje
        Mensaje::create([
            'campaña' => $request->input('campaña'),
            'contenido' => $request->input('contenido'),
        ]);

        // Redirigir a la vista index con un mensaje de éxito
        return redirect()->route('mensajes.index')->with('success', 'Mensaje creado exitosamente.');
    }
    public function editar($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        return view('mensajes.editar', compact('mensaje'));
    }

    public function update(Request $request, $id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->update($request->all());
        return redirect()->route('mensajes.index')->with('success', 'Mensaje actualizado correctamente');
    }


    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return redirect()->route('mensajes.index')->with('success', 'Mensaje eliminado exitosamente.');
    }
    public function eliminarId($id)
    {
        $mensaje = Mensaje::find($id);

        if (!$mensaje) {
            return redirect()->route('mensajes.index')->with('error', 'Mensaje no encontrado.');
        }

        $mensaje->delete();

        return redirect()->route('mensajes.index')->with('success', 'Mensaje eliminado exitosamente.');
    }
}
