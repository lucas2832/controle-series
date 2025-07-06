<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;


class SeriesControler extends Controller
{
    public function index()
    {
        $series = Serie::all();

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        if ($serie->save()) {
            return redirect('/series')->with('mensagem.sucesso', "Série '$nomeSerie' adicionada com sucesso!");
        }

    }
}
