<?php

Route::get('/', function(){
    return '<h1>Listagem de produtos</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
