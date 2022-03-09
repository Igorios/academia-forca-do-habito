<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\User;

class RegisterController extends Controller
{

    public function storeReg(Request $request) {

        $register = new Register;

        $register->name = $request->name;
        $register->login = $request->login;
        $register->password = $request->password;
        $register->profile = $request->profile;

        $register->save();

        return redirect('/')->with('msg', 'Criado com sucesso!');

    }

    public function createUser() {
        return view('users.user');
    }
    
    public function destroy($id) {

        Register::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Deletado com sucesso!');

    }

    public function dashboard() {

        $register = Register::all();

        return view('users.relatorio', ['register' =>  $register]);
    }

}
