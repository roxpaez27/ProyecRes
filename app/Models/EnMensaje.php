<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnMensaje extends Model
{
    use HasFactory;
    protected $fillable = ['TipoM', 'Tclientes', 'campaña', 'zona'];
}
