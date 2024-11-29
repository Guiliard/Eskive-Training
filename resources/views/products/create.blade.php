@extends('../layout')

@section('title', 'Cadastrar Produto')

@section('conteudo')

<h1>Cadastrar Novo Produto</h1>

<form action="{{ route('product.store') }}" method="POST">
    @csrf 

    <label for="name">Nome do Produto:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="description">Descrição do Produto:</label>
    <textarea id="description" name="description"></textarea>
    <br><br>

    <label for="price">Preço do Produto:</label>
    <input type="number" id="price" name="price" step="0.01" min="0.01" required>
    <br><br>

    <label for="category_id">Categoria:</label>
    <select id="category_id" name="category_id" required>
        <option value="">Selecione uma Categoria</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <br><br>

    <button type="submit">Cadastrar Produto</button>
</form>

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection
