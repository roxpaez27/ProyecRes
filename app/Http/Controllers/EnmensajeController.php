<?php

namespace App\Http\Controllers;
use App\Models\EnMensaje;
use Illuminate\Http\Request;

class EnmensajeController extends Controller
{
    public function index()
    {
        $enmensajes = EnMensaje::paginate(10);
        return view('enviarmensajes.index', compact('enviarmensajes'));
    }

}
