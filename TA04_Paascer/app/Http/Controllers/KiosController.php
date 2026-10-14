<?php

namespace App\Http\Controllers;

use App\Models\Kios;
use Illuminate\Http\Request;

class KiosController extends Controller
{
    public function index()
    {
        $kios = Kios::with('retribusi')->get();

        return view('kios.index', compact('kios'));
    }
}