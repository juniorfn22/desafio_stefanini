@extends('principal')
@section('conteudo')
<h1 class="d-flex justify-content-center">Cadastro de Cliente</h1>
<div class="container">
    @if(session('success'))
    <div id="msg" class="alert alert-sucess">
    <script>
    alert('Cliente cadastrado');
    </script>
    </div>
@endif
    <form action="{{route('cadastrarCliente')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nomeCliente" id="nomeCliente" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Sobrenome:</label>
            <input type="text" name="sobrenomeCliente" id="sobrenomeCliente" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" >
            cadastrar
        </button>
    </form>
</div>
@endsection
