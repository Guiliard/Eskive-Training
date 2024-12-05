@extends('../layout')

@section('title', 'Edit Products')

@section('conteudo')

<h1>Editar Produto</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf  
    @method('PUT') 

    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}" required>
    <br><br>

    <label for="description">Descrição:</label>
    <textarea id="description" name="description" required>{{ $product->description }}</textarea>
    <br><br>

    <label for="price">Preço:</label>
    <input type="number" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
    <br><br>

    <label for="category_id">Categoria:</label>
    <select name="category_id" id="category_id" required>
        <option value="">Escolha uma categoria</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <br><br>

    <button type="submit">Atualizar Produto</button>
</form>

<br>

<a href="{{ url()->previous() }}"> 
    <button type="submit">Voltar</button> 
</a>

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection