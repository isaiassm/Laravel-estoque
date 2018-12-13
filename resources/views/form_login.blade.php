@extends('principal')

@section('conteudo')


    <form action="/login" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <div class="form-group">
        <label>Email: </label>
        <input name="email" class="form-control">
    </div>

    <div  class="form-group">
        <label>Senha: </label>
        <input type="password" name="senha" class="form-control">
    </div>

   
<button type="submit" class="btn btn-default">Login</button>
    </form>


@stop