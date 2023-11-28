<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function liste()
    {
        return view('formation.liste');
    }

    public function add()
    {
        return view('formation.add');
    }
}
