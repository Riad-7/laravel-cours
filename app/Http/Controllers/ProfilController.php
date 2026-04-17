<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index ()
    {
        $profils = Profil::all();
        return view('profil', compact('profils'));
    }

    public function show (Profil $profil)
    {
        return view('show', compact('profil'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profils',
            'password' => 'nullable'
        ]);

        Profil::create($request->post());
        return redirect()->route('profil.index')->with('success', 'Profil Bien Cree');
    }
}
