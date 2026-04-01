<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index (Request $request)
    {
        $profiles = Profil::paginate(10);
        return view('profiles', compact('profiles'));
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $profile = Profil::findOrFail($id);
        return view('profile', compact('profile'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request) 
    {
        
    }
}
