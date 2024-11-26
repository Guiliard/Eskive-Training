@extends('../layout') 

@section('title', 'Gerenciador')

@section('conteudo')

    <h1>Bem-vindo ao Gerenciador de Produtos e Categorias</h1>

    <h2>Gerenciamento de Produtos</h2>
    <a href="{{ route('product.index') }}">Listar Produtos</a>
    <br><br>
    <a href="{{ route('product.show', ['id' => 0]) }}">Ver Um Produto Específico</a>
    <br><br>
    <a href="{{ route('product.store') }}">Cadastrar Novo Produto</a>
    <br><br>
    <a href="{{ route('product.update', ['id' => 0]) }}">Atualizar Produto Específico</a>
    <br><br>
    <a href="{{ route('product.destroy', ['id' => 0]) }}">Deletar Produto Específico</a>
    <br><br>

    <h2>Gerenciamento de Categorias</h2>
    <a href="{{ route('category.index') }}">Listar Categorias</a>
    <br><br>
    <a href="{{ route('category.show', ['id' => 0]) }}">Ver Uma Categoria Específica</a>
    <br><br>
    <a href="{{ route('category.store') }}">Cadastrar Nova Categoria</a>
    <br><br>
    <a href="{{ route('category.update', ['id' => 0]) }}">Atualizar Categoria Específica</a>
    <br><br>
    <a href="{{ route('category.destroy', ['id' => 0]) }}">Deletar Categoria Específica</a>

@endsection