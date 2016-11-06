<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroEmail;
use App\Http\Requests;

class HomeController extends Controller
{
    public function post(Request $request)
    {
    	$this->validate($request, [
    		'nome' => ['required'],
    		'email' => ['required','email','unique:cadastroemail']
    		]);
    	$email = new CadastroEmail;
    	$email->nome = $request->nome;
    	$email->email = $request->email;
    	$email->save();
    	return view('welcome');
    }
}
