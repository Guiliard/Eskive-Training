<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Produtos</title>
</head>
<body>
    <h1>Bem-vindo ao Gerenciador de Produtos</h1>
    <a href="{{ route('product.show_all') }}">Ver Todos os Produtos</a>
    <br><br>
    <a href="{{ route('product.show_one') }}">Ver Um Produto Específico</a>
    <br><br>
    <a href="{{ route('product.store') }}">Cadastrar Novo Produto</a>
    <br><br>
    <a href="{{ route('product.update') }}">Atualizar Produto Específico</a>
    <br><br>
    <a href="{{ route('product.delete') }}">Deletar Produto Específico</a>

</body>
</html>

