@extends('../layout') 

@section('title', 'Show Products')

@section('conteudo')

<h1>Detalhes do Produto</h1>

<p><strong>ID:</strong> {{ $product->id }}</p>
<p><strong>Nome:</strong> {{ $product->name }}</p>
<p><strong>Descrição:</strong> {{ $product->description }}</p>
<p><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
<p><strong>Categoria:</strong> {{ $product->category->name }}</p>
<p><strong>Criado em:</strong> {{ $product->created_at }}</p>
<p><strong>Atualizado em:</strong> {{ $product->updated_at }}</p>

<br>

<a href="{{ url()->previous() }}"> 
    <button type="submit">Voltar</button> 
</a>

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection