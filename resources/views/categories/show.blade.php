@extends('../layout') 

@section('title', 'Show Categories')

@section('conteudo')

<h1>Detalhes da Categoria</h1>

<p><strong>ID:</strong> {{ $category_by_id->id }}</p>
<p><strong>Nome:</strong> {{ $category_by_id->name }}</p>
<p><strong>Criado em:</strong> {{ $category_by_id->created_at }}</p>
<p><strong>Atualizado em:</strong> {{ $category_by_id->updated_at }}</p>

@endsection