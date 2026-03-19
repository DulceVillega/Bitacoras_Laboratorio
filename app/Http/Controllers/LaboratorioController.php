<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratorio; 
class LaboratorioController extends Controller
{
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('admin.laboratorios.index', compact('laboratorios'));
    }

    public function create()
    {
        return view('admin.laboratorios.create');
    }

    public function store(Request $request)
    {
        Laboratorio::create([
            'nombre' => $request->nombre,
            'ubicacion' => $request->ubicacion,
        ]);

        return redirect()->route('admin.laboratorios.index')
            ->with('success', 'Laboratorio creado correctamente');
    }
}