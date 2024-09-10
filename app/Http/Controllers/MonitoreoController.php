<?php

namespace App\Http\Controllers;

use App\Models\Monitoreo;
use Illuminate\Http\Request;


class MonitoreoController extends Controller
{

    public function index()
    {
        $monitoreos = Monitoreo::paginate(10);
        return view('monitoreos.index', compact('monitoreos'));
    }
    
}
