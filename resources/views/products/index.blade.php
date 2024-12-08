@extends('../layout') 

@section('title', 'Index Products')

@section('conteudo')

<h1>Lista de Produtos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Nome:</th>
                <th>Descrição:</th>
                <th>Preço:</th>
                <th>Categoria:</th>
                <th>Criado:</th>
                <th>Atualizado:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}">
                            <button type="button">Ver Produto</button>
                        </a>
        
                        <a href="{{ route('products.edit', $product->id) }}">
                            <button type="button">Atualizar Produto</button>
                        </a>
        
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este produto?')">Deletar Produto</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('products.create') }}">
    <button type="button">Cadastrar Novo Produto</button>
</a>

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection