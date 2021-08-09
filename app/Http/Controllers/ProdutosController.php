<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return 'página de produtos';
    }

    public function create(){
        return "página de inserir produto.";
    }

    public function show($nome, $valor){
            //se valor existe
    if($valor){
        return "O nome do produto é $nome e seu valor é $valor";
    }else{
        return "O nome do produto é $nome";
    }
    
}
    }

