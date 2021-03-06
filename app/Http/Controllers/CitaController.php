<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Cliente;
use App\Models\Veterinario;
use App\Models\User;
use App\Models\Agenda;
use Illuminate\Http\Request;

/**
 * Class CitaController
 * @package App\Http\Controllers
 */
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::paginate();

        return view('cita.index', compact('citas'))
            ->with('i', (request()->input('page', 1) - 1) * $citas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cita = new Cita();
        $clientes = Cliente::pluck('nombre', 'id');
        $veterinarios = Veterinario::pluck('nombre', 'id');
        return view('cita.create', compact('cita', 'clientes', 'veterinarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $agenda = Agenda::where('id_user', '=', auth()->user()->id)->first();
        $request->request->add(['id_agenda' => $agenda->id]);
        request()->validate(Cita::$rules);
        // $request->request->add(['id_agenda' => getUserAgenda()]);
        $cita = Cita::create($request->all());

        return redirect()->route('citas.index')
            ->with('success', 'Cita created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);

        return view('cita.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita = Cita::find($id);
        $clientes = Cliente::pluck('nombre', 'id');
        $veterinarios = Veterinario::pluck('nombre', 'id');
        return view('cita.edit', compact('cita', 'clientes', 'veterinarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cita $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        request()->validate(Cita::$rules);

        $cita->update($request->all());

        return redirect()->route('citas.index')
            ->with('success', 'Cita updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cita = Cita::find($id)->update(['estado' => 'Cancelada']);

        return redirect()->route('citas.index')
            ->with('success', 'Cita deleted successfully');
    }
}
