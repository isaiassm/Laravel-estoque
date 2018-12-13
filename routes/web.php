<?php

Route::get('/', function(){
    return '<h1>Listagem de produtos</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/login', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::get('/home', 'RegisterController@validator');