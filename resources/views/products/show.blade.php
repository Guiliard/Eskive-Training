@extends('../layout') 

@section('title', 'Show Products')

@section('conteudo')

<h1>Detalhes do Produto</h1>

<p><strong>ID:</strong> {{ $product_by_id->id }}</p>
<p><strong>Nome:</strong> {{ $product_by_id->name }}</p>
<p><strong>Descrição:</strong> {{ $product_by_id->description }}</p>
<p><strong>Preço:</strong> R$ {{ number_format($product_by_id->price, 2, ',', '.') }}</p>
<p><strong>Categoria:</strong> {{ $product_by_id->category_id }}</p>
<p><strong>Criado em:</strong> {{ $product_by_id->created_at }}</p>
<p><strong>Atualizado em:</strong> {{ $product_by_id->updated_at }}</p>

@endsection