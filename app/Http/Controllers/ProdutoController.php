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

    public function mostra( $id){
     
        $produto = Produto::find($id);

        return view('detalhes')->with('p', $produto);
    }
    
    public function novo(){
        return view('formulario');
    }

    public function adiciona(){
        
        $params = Request::all();
        $produto = new Produto($params);

        $produto->save();

        return redirect('/produtos')->withInput();
        
    }

    public function remove($id){
        $produto =  Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

}



