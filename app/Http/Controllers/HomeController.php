<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Agenda;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $citas = Cita::paginate();
        $agendas = Agenda::paginate();
        error_log($agendas->count());
        $today = DB::table('citas')->whereDate('fecha', '=', date('Y-m-d'))->where('estado', '=', 'Activa')->get();
        error_log($today);
        $active = DB::table('citas')->where('estado', '=', 'Activa')->get();
        $complete = DB::table('citas')->where('estado', '=', 'Finalizada')->get();
        $close = DB::table('citas')->where('estado', '=', 'Cancelada')->get();
        
        return view('home', compact('citas', 'today', 'close', 'complete', 'active', 'agendas'))
            ->with('i', (request()->input('page', 1) - 1) * $citas->perPage());
    }
}
