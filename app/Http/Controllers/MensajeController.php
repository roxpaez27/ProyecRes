<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mensaje;

class MensajeController extends Controller
{
    public function index()
    {
        $mensajes = Mensaje::paginate(10);
        return view('mensajes.index', compact('mensajes'));
    }

    public function create()
    {
        return view('mensajes.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'campaña' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        Mensaje::create($request->all());
        return redirect()->route('mensajes.index')->with('success', 'Mensaje creado exitosamente.');
    }  
    public function edit($id)
    {
        $mensaje = Mensaje::find($id);
        return view('mensajes.editar', compact('mensaje'));
        
    }

    public function update(Request $request, Mensaje $mensaje)
    {
        $request->validate([
            'campaña' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        $mensaje->update($request->all());
        return redirect()->route('mensajes.index')->with('success', 'Mensaje actualizado exitosamente.');
    }

    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return redirect()->route('mensajes.index')->with('success', 'Mensaje eliminado exitosamente.');
    }  

}
