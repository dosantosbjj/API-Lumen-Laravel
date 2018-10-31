<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pokemon;

class PokemonController extends Controller
{
    public function all()
    {
        $bixos = Pokemon::all();
        echo '<pre>';
        dd($bixos);
        echo '</pre>';        
    }
	
    public function show($id)
    {
        $bixo = Pokemon::where('id', $id)->first();
        if($bixo != null){
            return response($bixo->nome, 200)
                        ->header('Content-type', 'text/plain');
        }
        return response('ID nao existe no sistema', 404)
                        ->header('Content-type', 'text/plain');        
    }

    // public function index()
    // {
    //     return view('index'); //caminho/nome sem extensao
    //     //HTML fica em /resources/views
    // }
}
