<?php

namespace App\Http\Controllers;

use App\Models\manzana;
use Illuminate\Http\Request;

class ManzanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$manzana = Coche::where('idEmpleado', Auth::user()->id)->get();

        $manzana = Manzana::all();

        return view('paginaManzanas')->with('manzanas', $manzana);
    }


    public function create()
    {


        return view('crearManzanaFormulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Manzana::create([
            'nombre' => $request->nombre,
            'id' => $request->id,
            'tipoManzana' => $request->tipoManzana,
            'precioKilo' => $request->precioKilo,
        ]);


        return redirect('/paginaManzanas');
    }

    /**
     * Display the specified resource.
     */
    public function show(manzana $manzana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $manzanaModificar = Manzana::where('id', $id)->get();

        return view('modificarManzanaFormulario')->with('manzanaModificar', $manzanaModificar[0]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Manzana::where('id', $request->id)
            ->update([
                'nombre' => $request->nombre,
                'tipoManzana' => $request->tipoManzana,
                'precioKilo' => $request->precioKilo,
            ]);


        return redirect()->route('paginaManzanas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Manzana::where('id', $id)->delete();

        return redirect()->route('paginaManzanas');
    }
}
