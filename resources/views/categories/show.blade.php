@extends('../layout') 

@section('title', 'Show Categories')

@section('conteudo')

<h1>Detalhes da Categoria</h1>

<p><strong>ID:</strong> {{ $category->id }}</p>
<p><strong>Nome:</strong> {{ $category->name }}</p>
<p><strong>Criado em:</strong> {{ $category->created_at }}</p>
<p><strong>Atualizado em:</strong> {{ $category->updated_at }}</p>

<br>

<a href="{{ url()->previous() }}"> 
    <button type="submit">Voltar</button> 
</a>

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection