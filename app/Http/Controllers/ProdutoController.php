<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;

class ProdutoController extends Controller {
   
    public function lista(){

      $produtos = Produto::all();
      
      return view('listagem')->with('produtos',$produtos);
      
      //with indica para a view que esta usando a variavel produtos
    }

    public function mostra(){
        $id = Request::route('id');
        $produto = Produto::find($id);

        return view('detalhes')->with('p', $produto);
    }
    
    public function novo(){
        return view('formulario');
    }

    public function adiciona(){
        
        $produto = new Produto();
        $produto->nome = Request::input('nome');
        $produto->quantidade = Request::input('quantidade');
        $produto->valor = Request::input('valor');
        $produto->descricao = Request::input('descricao');

        $produto->save();

        return redirect('/produtos')->withInput();
        
    }
}



