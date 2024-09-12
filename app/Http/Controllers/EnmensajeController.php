<?php

namespace App\Http\Controllers;

use App\Models\EnMensaje;
use Illuminate\Http\Request;
use App\Models\Mensaje;

class EnmensajeController extends Controller
{
    //Funcion para mostrar el index
    public function index()
    {

        return view('enviarmensajes.index');
    }
    //funcion para mostrar la vista de enviar un mensaje 
    public function crear()
    {
        return view('enviarmensajes.crear');
    }

    //Funcionn para enviar el mensaje y especifica que requiere un archivo csv, un tipo de mensaje y una campaña para poder enviar el mensaje
    public function enviarMensajes(Request $request)
    {
        // Validar el archivo CSV
        $request->validate([
            'archivo' => 'required|mimes:csv,txt',
            'mensaje_tipo' => 'required',
            'campaña' => 'required',
        ]);

        // Leer el archivo CSV y obtener los clientes
        $clientes = $this->procesarArchivoCSV($request->file('archivo'));

        // Obtener el mensaje seleccionado de la campaña
        $mensaje = Mensaje::find($request->campaña);

        // Enviar mensajes según el tipo seleccionado
        if ($request->mensaje_tipo == 'whatsapp') {
            $this->enviarMensajesWhatsapp($clientes, $mensaje);
        } else {
            // Lógica para enviar SMS
        }

        return back()->with('success', 'Mensajes enviados exitosamente');
    }

    // Función para procesar el archivo CSV y extraer los datos
    private function procesarArchivoCSV($archivo)
    {
        $clientes = [];
        if (($handle = fopen($archivo, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $clientes[] = [
                    'idcliente' => $data[0],
                    'adeudo' => $data[1],
                    'fechacorte' => $data[2],
                    'telefono' => $data[3],
                ];
            }
            fclose($handle);
        }

        return $clientes;
    }
}
