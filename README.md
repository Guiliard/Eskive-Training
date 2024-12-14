<h1 align="center">Eskive Training</h1>
<div style="display: inline-block;">
<img align="center" height="20px" width="90px" src=https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white>
<img align="center" height="20px" width="90px" src=https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white>
<img align="center" height="20px" width="90px" src=https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white>
<img align="center" height="20px" width="90px" src="https://img.shields.io/badge/Made%20for-VSCode-1f425f.svg"/> 
<img align="center" height="20px" width="90px" src="https://img.shields.io/badge/Contributions-welcome-brightgreen.svg?style=flat"/>
</div>
<br>

## Gerenciador de Categorias e Produtos

Este projeto é uma aplicação web desenvolvida com Laravel para gerenciar categorias e produtos. A aplicação permite a criação, listagem, edição e exclusão de categorias e produtos, com uma interface simples e intuitiva. O projeto foi conduzido sobre a orientação do Engenheiro de Software <a href="https://github.com/MoisesAlvesCostaDev" target="_blank">Moises Costa</a>, sendo caracterizado como o produto central do treinamento de estágio Eskive 2024.

## Funcionalidades

### Categorias
- **Listar categorias**: Exibe todas as categorias cadastradas.
- **Cadastrar nova categoria**: Permite criar uma nova categoria.
- **Visualizar detalhes de uma categoria**: Exibe informações detalhadas de uma categoria.
- **Editar categoria existente**: Permite atualizar os dados de uma categoria.
- **Excluir categoria**: Remove a categoria e todos os produtos associados.

### Produtos
- **Listar produtos**: Exibe todos os produtos cadastrados.
- **Cadastrar novo produto**: Permite criar um novo produto.
- **Visualizar detalhes de um produto**: Exibe informações detalhadas de um produto.
- **Editar produto existente**: Permite atualizar os dados de um produto.
- **Excluir produto**: Remove o produto do sistema.

## Estrutura do Projeto

### Controllers
- **CategoryController**: Gerencia as operações CRUD para categorias.
- **ProductController**: Gerencia as operações CRUD para produtos.

### Models
- **Category**: Representa a entidade `categories`, com relacionamento `hasMany` para `products`.
- **Product**: Representa a entidade `products`, com relacionamento `belongsTo` para `categories`.

### Migrations
- **categories**: Define a estrutura da tabela de categorias, com suporte a exclusão lógica.
- **products**: Define a estrutura da tabela de produtos, com uma chave estrangeira para associar produtos às categorias.

### Views
- **Layout**: Contém o template base usado em todas as páginas.
- **Home**: Página inicial com o **menu principal**, que redireciona para:
  - **Categorias**: Página de listagem (index) das categorias.
  - **Produtos**: Página de listagem (index) dos produtos.
- **Categories**: Inclui as views específicas para listar, cadastrar, editar e visualizar categorias.
- **Products**: Inclui as views específicas para listar, cadastrar, editar e visualizar produtos.

### Rotas
- **Home**: Exibe a página inicial definido como Menu (`/`).
- **Categorias**: Prefixo `/category` com rotas para operações CRUD.
- **Produtos**: Prefixo `/product` com rotas para operações CRUD.

## Navegação

Na página inicial (Home), o **menu principal** simplifica a navegação:
- **Categorias**: Link para a página de listagem de categorias.
- **Produtos**: Link para a página de listagem de produtos.

A partir das páginas de listagem (index), o usuário pode realizar todas as ações disponíveis:
- Criar novos registros.
- Visualizar detalhes de registros.
- Editar registros existentes.
- Excluir registros.

Essa estrutura centraliza as operações e facilita a usabilidade da aplicação.

## Como Executar

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env` com as credenciais do banco de dados.

4. Execute as migrations:
   ```bash
   php artisan migrate
   ```

5. Inicie o servidor:
   ```bash
   php artisan serve
   ```

6. Acesse no navegador:
   ```bash
   http://localhost:8000
   ```

## Especificações do Dispositivo Utilizado

| Componentes            | Detalhes                                                                                         |
| -----------------------| -----------------------------------------------------------------------------------------------  |
|  `Processador`         | Intel(R) Core(TM) i7-1065G7 CPU @ 1.30GHz   1.50 GHz                                             |
|  `RAM Instalada`       | 12.0 GB (Utilizável: 11.8 GB)                                                                    |
|  `Tipo de Sistema`     | Sistema Operacional de 64 bits, processador baseado em x64                                       |
|  `Sistema Operacional` | Linux Pop!_OS 22.04 LTS                                                                           |

## Referências

[1] NODE STUDIO TREINAMENTOS - Tutorial Laravel. Disponível em: <https://www.youtube.com/watch?v=SnOlhaJTMTA&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb>. Acessado em: 25 de Novembro de 2024.

[2] LARAVEL - Laravel Documentation. Disponível em: <https://laravel.com/docs/11.x/readme>. Acessado em: 25 de Novembro de 2024.

[3] PHP - PHP Documentation. Disponível em: <https://www.php.net/docs.php>. Acessado em: 18 de Novembro de 2024.

[4] MySQL - MySQL Documenta. Disponível em: <https://dev.mysql.com/doc/>. Acessado em: 18 de Novembro de 2024.