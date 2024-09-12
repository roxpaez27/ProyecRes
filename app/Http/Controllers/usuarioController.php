<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//agregamos lo siguiente
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\Models\Departamento;
use Illuminate\Support\Facades\Validator;

class   usuarioController extends Controller
{

    public function index()
    {
       // $mensajes = Mensaje::paginate(10);
        return view('usuarios.index');
    }

    public function crear()
    {
        return view('usuarios.crear');
    }
}