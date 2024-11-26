<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Categorias</title>
</head>
<body>
    <h1>Bem-vindo ao Gerenciador de Categorias</h1>
    <a href="{{ route('category.show_all') }}">Ver Todas as Categorias</a>
    <br><br>
    <a href="{{ route('category.show_one') }}">Ver Uma Categoria Específica</a>
    <br><br>
    <a href="{{ route('category.store') }}">Cadastrar Nova Categoria</a>
    <br><br>
    <a href="{{ route('category.update') }}">Atualizar Categoria Específica</a>
    <br><br>
    <a href="{{ route('category.delete') }}">Deletar Categoria Específica</a>
</body>
</html>
