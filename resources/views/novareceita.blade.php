@extends('layouts.app', ["current" => "receitas"])

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/receitas" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeReceita">Nome da Receita</label>
                <input type="text" class="form-control" name="nomeReceita" 
                       id="nomeReceita" placeholder="Receita">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection