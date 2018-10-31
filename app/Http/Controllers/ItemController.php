<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function all()
    {
        $itens = Item::all();
        echo '<pre>';
        dd($itens);
        echo '</pre>';        
    }

    public function show($id)
    {
        $itens = Item::where('id', $id)->first();
        if($itens != null){
            return response($itens->nome, 200)
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
