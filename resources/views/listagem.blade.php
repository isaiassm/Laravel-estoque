@extends('principal')

@section('conteudo')

    <h1>Listagem de produtos</h1>

    <table class="table">
    @foreach($produtos as $p)
        
    <tr class="{{$p->quantidade <=1 ? 'text-danger' : ''}}">
        <td>Nome: {{ $p->nome }}</td>
        <td>Valor: {{ $p->valor}}</td>
        <td>Descrição: {{ $p->descricao}}</td>
        <td>Quantidade: {{ $p->quantidade}}</td>
        <td>
        <a href="/produtos/mostra/{{$p->id}}"> Visualizar
        </a>
        </td>
     </tr>
    @endforeach
    </table>
 @stop