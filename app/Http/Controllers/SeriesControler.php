<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesControler extends Controller
{
    public function index()
    {
        $series = [
            'Dark',
            'PeaceMaker',
            'The Mandalorian'
        ];

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }
}
