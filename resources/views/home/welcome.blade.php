@extends('../layout') 

@section('title', 'Gerenciador')

@section('conteudo')

    <h1>Bem-vindo ao Gerenciador de Categorias e Produtos</h1>

    <h2>Gerenciamento de Categorias</h2>

    <form action="{{ route('category.index') }}" method="GET">
        <button type="submit">Listar Categorias</button>
    </form>
    <br>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <button type="submit">Cadastrar Nova Categoria</button>
    </form>
    <br>

    <form action="{{ route('category.show', ['id' => 0]) }}" method="GET">
        <button type="submit">Ver Uma Categoria Específica</button>
    </form>
    <br>

    <form action="{{ route('category.update', ['id' => 0]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">Atualizar Categoria Específica</button>
    </form>
    <br>

    <form action="{{ route('category.destroy', ['id' => 0]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar Categoria Específica</button>
    </form>
    <br>

    <h2>Gerenciamento de Produtos</h2>

    <form action="{{ route('product.index') }}" method="GET">
        <button type="submit">Listar Produtos</button>
    </form>
    <br>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <button type="submit">Cadastrar Novo Produto</button>
    </form>
    <br>

    <form action="{{ route('product.show', ['id' => 0]) }}" method="GET">
        <button type="submit">Ver Um Produto Específico</button>
    </form>
    <br>

    <form action="{{ route('product.update', ['id' => 0]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">Atualizar Produto Específico</button>
    </form>
    <br>

    <form action="{{ route('product.destroy', ['id' => 0]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar Produto Específico</button>
    </form>

@endsection