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
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}">
                            <button type="button">Ver Categoria</button>
                        </a>

                        <a href="{{ route('categories.edit', $category->id) }}">
                            <button type="button">Atualizar Categoria</button>
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja deletar esta categoria?')">Deletar Categoria</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<br>

<a href="{{ route('categories.create') }}">
    <button type="button">Cadastrar Nova Categoria</button>
</a>

<br>

<a href="{{ route('home') }}">
    <button type="submit">Home</button>
</a>

@endsection