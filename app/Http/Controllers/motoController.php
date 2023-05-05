<?php

namespace App\Http\Controllers;

use App\Models\motoModel;
use Illuminate\Http\Request;

class motoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = motoModel::all();

        return view('moto.index')->with('motos',$motos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(motoModel $motoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(motoModel $motoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, motoModel $motoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(motoModel $motoModel)
    {
        //
    }
}
