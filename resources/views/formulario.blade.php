@extends('principal')

@section('conteudo')

    <form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <div class="form-group">
        <label>Nome: </label>
        <input name="nome" class="form-control">
    </div>

    <div  class="form-group">
        <label>Valor: </label>
        <input name="valor" class="form-control">
    </div>

    <div class="form-group">
        <label>Quantidade: </label>
        <input name="quantidade" class="form-control">
    </div>
    <div class="form-group">
        <label>Tamanho: </label>
        <input name="tamanho" class="form-control">
    </div>

    <div class="form-group">
        <label>Descrição: </label>
        <input name="descricao" class="form-control">
    </div>
<button type="submit" class="btn btn-default">Adiciona</button>
    </form>


@stop