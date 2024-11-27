@extends('../layout')

@section('title', 'Store Products')

@section('conteudo')

<h1>Cadastrar Novo Produto</h1>

<form action="{{ route('product.store') }}" method="POST">
    @csrf  

    <!-- Nome do Produto -->
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <!-- Descrição do Produto -->
    <label for="description">Descrição:</label>
    <textarea id="description" name="description"></textarea>
    <br><br>

    <!-- Preço do Produto -->
    <label for="price">Preço:</label>
    <input type="number" id="price" name="price" step="0.01" required>
    <br><br>

    <!-- Categoria do Produto -->
    <label for="category_id">Categoria:</label>
    <select name="category_id" id="category_id" required>
        <option value="">Escolha uma categoria</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <br><br>

    <button type="submit">Cadastrar Produto</button>
</form>

@endsection
