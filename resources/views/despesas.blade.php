@extends('layouts.app', ["current" => "despesas"])

@section('content')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Receitas</h5>

@if(count($despesas) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Receita</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($despesas as $despesa)
                <tr>
                    <td>{{$despesa->id}}</td>
                    <td>{{$despesa->nome}}</td>
                    <td>
                        <a href="/despesas/editar/{{$despesa->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/despesas/apagar/{{$despesa->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/despesas/novo" class="btn btn-sm btn-primary" role="button">Nova despesa</a>
    </div>
</div>



@endsection