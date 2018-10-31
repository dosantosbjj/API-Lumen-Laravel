<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Jogador;

class JogadorController extends Controller
{
    public function all()
    {
        $jogadores = Jogador::all();
        echo '<pre>';
        dd($jogadores);
        echo '</pre>';        
    }

    public function show($id)
    {
        $jogadores = Jogador::where('id', $id)->first();
        if($jogadores != null){
            return response($jogadores->nome, 200)
                        ->header('Content-type', 'text/plain');
        }
        return response('ID nao existe no sistema', 404)
                        ->header('Content-type', 'text/plain');        
    }

    public function index()
	 {
         return view('index'); //caminho/nome sem extensao
     }
}
