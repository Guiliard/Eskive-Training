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
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection