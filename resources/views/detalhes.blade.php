@extends('principal')

@section('conteudo')
    <h1>Detalhes do Produto {{$p->nome }}</h1>

    <ul> 
    <li>
    Valor: R$ {{$p->valor}}
    </li>
    <li>
    Descrição: {{$p->descricao}}
    </li>
    <li>
    Quantidade de produto em estoque:{{$p->quantidade}}
    </li>

</ul>

@stop