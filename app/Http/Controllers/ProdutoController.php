<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {
   
    public function lista(){
       
      $produtos = DB::select('select * from produtos');
      
        return view('listagem')->with('produtos',$produtos);

        //with indica para a view que esta usando a variavel produtos
    }
}



