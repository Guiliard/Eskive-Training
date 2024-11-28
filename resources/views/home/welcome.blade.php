@extends('../layout') 

@section('title', 'Gerenciador')

@section('conteudo')

    <h1>Bem-vindo ao Gerenciador de Categorias e Produtos!</h1>

    <h2>Gerenciamento de Categorias</h2>

    <a href="{{ route('category.index') }}">
        <button type="button">Listar Categorias</button>
    </a>
    <br><br>
    

    <a href="{{ route('category.create') }}">
        <button type="button">Cadastrar Nova Categoria</button>
    </a>
    <br><br>

    <form id="ShowCategoryForm" action="{{ route('category.show', ['id' => '__ID__']) }}" method="GET" onsubmit="updateFormId(event, 'ShowCategoryForm', '{{ route('category.show', ['id' => '__ID__']) }}')" data-action="category.show">
        <button type="submit">Ver Categoria</button>
        <label for="createCategory">Selecione uma Categoria:</label>
        <select id="createCategory" required onchange="updateFormId(event, 'ShowCategoryForm', '{{ route('category.show', ['id' => '__ID__']) }}')">
            <option value="" disabled selected>Escolha uma categoria</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </form>
    <br>
    
    <form id="EditCategoryForm" action="{{ route('category.edit', ['id' => '__ID__']) }}" method="GET" onsubmit="updateFormId(event, 'EditCategoryForm', '{{ route('category.edit', ['id' => '__ID__']) }}')" data-action="category.edit">
        <button type="submit">Atualizar Categoria</button>
        <label for="editCategory">Selecione uma Categoria:</label>
        <select id="editCategory" required onchange="updateFormId(event, 'EditCategoryForm', '{{ route('category.edit', ['id' => '__ID__']) }}')">
            <option value="" disabled selected>Escolha uma categoria</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </form>    
    <br>
    
    <form id="deleteCategoryForm" action="{{ route('category.destroy', ['id' => '__ID__']) }}" method="POST" onsubmit="updateFormId(event, 'deleteCategoryForm', '{{ route('category.destroy', ['id' => '__ID__']) }}')" data-action="category.destroy">
        @method('DELETE')
        @csrf
        <button type="submit">Deletar Categoria</button>
        <label for="deleteCategory">Selecione uma Categoria:</label>
        <select id="deleteCategory" required onchange="updateFormId(event, 'deleteCategoryForm', '{{ route('category.destroy', ['id' => '__ID__']) }}')">
            <option value="" disabled selected>Escolha uma categoria</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </form>
    
    <script>
        function updateFormId(event, formId, routeTemplate) {
            const selectElement = document.getElementById(formId).querySelector('select');
            const selectedCategoryId = selectElement.value;
    
            // Verifica se uma categoria foi selecionada
            if (selectedCategoryId) {
                const form = document.getElementById(formId);
    
                // Substitui o marcador de ID na URL de ação
                const actionUrl = routeTemplate.replace('__ID__', selectedCategoryId);
                form.action = actionUrl;
            }
        }
    </script>

    <h2>Gerenciamento de Produtos</h2>

    <a href="{{ route('product.index') }}">
        <button type="button">Listar Produtos</button>
    </a>
    <br><br>
    
    <a href="{{ route('product.create') }}">
        <button type="button">Cadastrar Novo Produto</button>
    </a>
    <br><br>
    
    <form id="ShowProductForm" action="{{ route('product.show', ['id' => '__ID__']) }}" method="GET" onsubmit="updateFormId(event, 'ShowProductForm', '{{ route('product.show', ['id' => '__ID__']) }}')" data-action="product.show">
        <button type="submit">Ver Produto</button>
        <label for="showProduct">Selecione um Produto:</label>
        <select id="showProduct" required onchange="updateFormId(event, 'ShowProductForm', '{{ route('product.show', ['id' => '__ID__']) }}')">
            <option value="" disabled selected>Escolha um produto</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </form>
    <br>
    
    <form id="EditProductForm" action="{{ route('product.edit', ['id' => '__ID__']) }}" method="GET" onsubmit="updateFormId(event, 'EditProductForm', '{{ route('product.edit', ['id' => '__ID__']) }}')" data-action="product.edit">
        <button type="submit">Atualizar Produto</button>
        <label for="editProduct">Selecione um Produto:</label>
        <select id="editProduct" required onchange="updateFormId(event, 'EditProductForm', '{{ route('product.edit', ['id' => '__ID__']) }}')">
            <option value="" disabled selected>Escolha um produto</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </form>    
    <br>
    
    <form id="deleteProductForm" action="{{ route('product.destroy', ['id' => '__ID__']) }}" method="POST" onsubmit="updateFormId(event, 'deleteProductForm', '{{ route('product.destroy', ['id' => '__ID__']) }}')" data-action="product.destroy">
        @method('DELETE')
        @csrf
        <button type="submit">Deletar Produto</button>
        <label for="deleteProduct">Selecione um Produto:</label>
        <select id="deleteProduct" required onchange="updateFormId(event, 'deleteProductForm', '{{ route('product.destroy', ['id' => '__ID__']) }}')">
            <option value="" disabled selected>Escolha um produto</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </form>
    
    <script>
        function updateFormId(event, formId, routeTemplate) {
            const selectElement = document.getElementById(formId).querySelector('select');
            const selectedProductId = selectElement.value;
    
            // Verifica se um produto foi selecionado
            if (selectedProductId) {
                const form = document.getElementById(formId);
    
                // Substitui o marcador de ID na URL de ação
                const actionUrl = routeTemplate.replace('__ID__', selectedProductId);
                form.action = actionUrl;
            }
        }
    </script>
    
@endsection