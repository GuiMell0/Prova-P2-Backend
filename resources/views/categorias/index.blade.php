<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div>
                <h1>📋 Operações CRUD usando Docker, Laravel e MySQL</h1>
                <p class="header-subtitle">Listagem de categorias</p>
            </div>
        </div>
    </header>

    <div class="container">
        <h2 class="section-title">Lista de Categorias</h2>
        <a href="{{ route('categorias.create') }}" class="btn-novo">➕ Nova Categoria</a>
        
        @if($categorias->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td><strong>{{ $categoria->nome }}</strong></td>
                    <td>{{ $categoria->descricao ?? 'Sem descrição' }}</td>
                    <td>
                        <div class="acoes">
                            <a href="{{ route('categorias.edit', $categoria) }}" class="btn-editar">✏️ Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-excluir">🗑️ Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="mensagem-vazia">Nenhuma categoria cadastrada ainda. Clique em "Nova Categoria" para começar.</p>
        @endif
    </div>
</body>
</html>