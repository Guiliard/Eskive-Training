@extends('../layout') 

@section('title', 'Gerenciador')

@section('conteudo')

<h1>Bem-vindo ao Gerenciador de Categorias e Produtos!</h1>

<h2 align="center">Menu de Gerenciamento</h2>
<table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
        <td align="center">
            <a href="{{ route('categories.index') }}">Gerenciar Categorias</a>
        </td>
    </tr>
    <tr>
        <td align="center">
            <a href="{{ route('products.index') }}">Gerenciar Produtos</a>
        </td>
    </tr>
</table>
    
@endsection