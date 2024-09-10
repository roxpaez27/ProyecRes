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
use App\Models\Cliente;

use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index(Request $request)
     {
        $clientes = Cliente::paginate(10);
        return view('clientes.index', compact('clientes'));      
    }
}
