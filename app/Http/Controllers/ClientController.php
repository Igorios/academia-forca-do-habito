<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;

class ClientController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function store(Request $request) {

        $client = new Client;

        $client->name = $request->name;
        $client->category = $request->category;
        $client->profile = $request->profile;

        $client->save();

        return redirect('/')->with('msg', 'Criado com sucesso!');

    }

    public function createClient() {
        return view('clients.create');
    }

    public function category() {
        return view('categories.category');
    }
}
