<?php

namespace App\Http\Controllers;

use App\Models\Veterinario;
use Illuminate\Http\Request;

/**
 * Class VeterinarioController
 * @package App\Http\Controllers
 */
class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veterinarios = Veterinario::paginate();

        return view('veterinario.index', compact('veterinarios'))
            ->with('i', (request()->input('page', 1) - 1) * $veterinarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $veterinario = new Veterinario();
        return view('veterinario.create', compact('veterinario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Veterinario::$rules);

        $veterinario = Veterinario::create($request->all());

        return redirect()->route('veterinarios.index')
            ->with('success', 'Veterinario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veterinario = Veterinario::find($id);

        return view('veterinario.show', compact('veterinario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veterinario = Veterinario::find($id);

        return view('veterinario.edit', compact('veterinario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Veterinario $veterinario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veterinario $veterinario)
    {
        request()->validate(Veterinario::$rules);

        $veterinario->update($request->all());

        return redirect()->route('veterinarios.index')
            ->with('success', 'Veterinario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $veterinario = Veterinario::find($id)->delete();

        return redirect()->route('veterinarios.index')
            ->with('success', 'Veterinario deleted successfully');
    }
}
