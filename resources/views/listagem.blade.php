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
        <td>
            <a class='text-danger' href="/produtos/remove/{{$p->id}}"> Remover
            </a>
        </td>        
     </tr>
    @endforeach
    </table>
    @if(old('nome'))
    <div class="alert alert-success">
    Produto {{old('nome')}} adicionado com sucesso;
    </div>
    
    @endif
 @stop