<?php

namespace App\Http\Controllers;
use App\Models\EnMensaje;
use Illuminate\Http\Request;

class EnmensajeController extends Controller
{
    public function index()
    {
       
        return view('enviarmensajes.index');
    }

    public function create()
    {
        return view('enviarmensajes.crear');
    }

}
