<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index (Request $request)
    {
<<<<<<< HEAD
        $profils = Profil::all();
        return view('profil', compact('profils'));
    }

    public function show (Profil $profil)
    {
        return view('show', compact('profil'));
=======
        $profiles = Profil::paginate(10);
        return view('profiles', compact('profiles'));
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $profile = Profil::findOrFail($id);
        return view('profile', compact('profile'));
>>>>>>> dab61387846cb07703331875178a3489e458d809
    }

    public function create()
    {
        return view('create');
    }

<<<<<<< HEAD
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profils',
            'password' => 'nullable'
        ]);

        Profil::create($request->post());
        return redirect()->route('profil.index')->with('success', 'Profil Bien Cree');
=======
    public function store(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        Profil::create($validated);
        return redirect()->route('profiles.index');
>>>>>>> dab61387846cb07703331875178a3489e458d809
    }
}
