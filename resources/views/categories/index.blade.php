@extends('../layout') 

@section('title', 'Index Categories')

@section('conteudo')

<h1>Lista de Categorias</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Nome:</th>
                <th>Criado:</th>
                <th>Atualizado:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection