@extends('layouts.app', ["current" => "receitas"])

@section('content')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Receitas</h5>

@if(count($receitas) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Receita</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($receitas as $receita)
                <tr>
                    <td>{{$receita->id}}</td>
                    <td>{{$receita->nome}}</td>
                    <td>
                        <a href="/receitas/editar/{{$receita->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/receitas/apagar/{{$receita->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/receitas/novo" class="btn btn-sm btn-primary" role="button">Nova receita</a>
    </div>
</div>



@endsection