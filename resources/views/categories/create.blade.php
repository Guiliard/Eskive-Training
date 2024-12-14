@extends('../layout')

@section('title', 'Create Categories')

@section('conteudo')

<h1>Cadastrar Nova Categoria</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf 

    <label for="name">Nome da Categoria:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <button type="submit">Cadastrar Categoria</button>
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