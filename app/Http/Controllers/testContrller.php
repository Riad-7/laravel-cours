<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testContrller extends Controller
{
    public function index(Request $request) {
        $users = [
            ['id' => '1', 'nom' => 'Riad', 'metier' => 'Developer'],
            ['id' => '2', 'nom' => 'Salim', 'metier' => 'Directeur'],
            ['id' => '3', 'nom' => 'Moha', 'metier' => 'Testeur']
        ];

        return view('home', compact('users'));
    }
}
