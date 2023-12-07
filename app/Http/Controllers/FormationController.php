<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function liste_formation()
    {
         $formations= Formation::all();
        return view('formation.liste', compact('formations'));

    }
}
