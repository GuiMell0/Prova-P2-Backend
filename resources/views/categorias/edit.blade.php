<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div>
                <h1>✏️ Editar Categoria</h1>
                <p class="header-subtitle">Atualize os dados da categoria</p>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="info-categoria">
            📌 Editando categoria ID: <strong>{{ $categoria->id }}</strong>
        </div>
        
        <form action="{{ route('categorias.update', $categoria) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label>Nome <span class="obrigatorio">*</span></label>
                <input type="text" name="nome" value="{{ $categoria->nome }}" placeholder="Digite o nome da categoria" required>
            </div>
            
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" placeholder="Digite uma descrição (opcional)">{{ $categoria->descricao }}</textarea>
            </div>
            
            <div class="botoes">
                <button type="submit" class="btn-atualizar">💾 Atualizar</button>
                <a href="{{ route('categorias.index') }}" class="btn-cancelar">❌ Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>