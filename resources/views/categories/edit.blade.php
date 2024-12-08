@extends('../layout')

@section('title', 'Edit Categories')

@section('conteudo')

<h1>Editar Categoria</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <label for="name">Nome da Categoria:</label>
    <input type="text" id="name" name="name" value="{{ $category->name }}" required>
    <br><br>

    <button type="submit">Atualizar Categoria</button>
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
