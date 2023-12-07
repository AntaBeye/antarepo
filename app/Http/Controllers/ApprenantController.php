<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class ApprenantController extends Controller
{
    public function liste_apprenant()
    {
        $apprenants= Apprenant::all();
        return view('apprenant.liste', compact('apprenants'));

    }
}
