@extends('principal')
@section('conteudo')
    <h1 class="d-flex justify-content-center">Lista Produtos</h1>
    <div class="container">
        <table class="table text-align-center">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td scope="row">{{$produto->nome}}</td>
                    <td>R$ {{$produto->preco}}</td>
                    <td>{{$produto->quantidade}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
