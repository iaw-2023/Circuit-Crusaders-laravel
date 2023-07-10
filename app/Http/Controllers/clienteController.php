<?php

namespace App\Http\Controllers;

use App\Models\clienteModel;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = clienteModel::all();

        return view('cliente.index')->with('clientes', $clientes);
    }

    
}
