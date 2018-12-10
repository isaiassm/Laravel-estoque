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
        
        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');

        DB::insert('insert into produtos (nome,quantidade,valor,descricao) values (?,?,?,?)',
    
        array($nome, $quantidade, $valor, $descricao));

        return redirect('/produtos')->withInput();
        
    }
}



