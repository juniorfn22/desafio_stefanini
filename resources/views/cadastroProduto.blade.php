@extends('principal')
@section('conteudo')
<h1 class="d-flex justify-content-center">Cadastro de Produto</h1>
<div class="container">
    @if(session('success'))
        <div id="msg" class="alert alert-sucess">
        <script>
        alert('Produto cadastrado');
        </script>
        </div>
    @endif
    <form action="{{route('cadastrarProduto')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nomeProduto" id="nomeProduto" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Preço:</label>
            <input type="text" name="precoProduto" id="precoProduto" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
</div>
@endsection
