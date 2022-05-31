@extends('layouts.app', ["current" => "despesas"])

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/despesas/{{$despesa->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeDespesa">Nome da Receita</label>
                <input type="text" class="form-control" name="nomeDespesa" value="{{$despesa->nome}}"
                       id="nomeDespesa" placeholder="Despesa">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection