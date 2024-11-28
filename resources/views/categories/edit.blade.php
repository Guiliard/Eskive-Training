@extends('../layout')

@section('title', 'Edit Category')

@section('conteudo')

<h1>Editar Categoria</h1>

<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <label for="name">Nome da Categoria:</label>
    <input type="text" id="name" name="name" value="{{ $category->name }}" required>
    <br><br>

    <button type="submit">Atualizar Categoria</button>
</form>

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection
