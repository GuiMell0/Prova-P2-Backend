<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Categoria</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div>
                <h1>➕ Nova Categoria</h1>
                <p class="header-subtitle">Preencha os dados para criar uma nova categoria</p>
            </div>
        </div>
    </header>

    <!-- Container -->
    <div class="container">
        <form action="<?php echo e(route('categorias.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="form-group">
                <label>Nome <span class="obrigatorio">*</span></label>
                <input type="text" name="nome" placeholder="Digite o nome da categoria" required>
            </div>
            
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" placeholder="Digite uma descrição (opcional)"></textarea>
            </div>
            
            <div class="botoes">
                <button type="submit" class="btn-salvar">💾 Salvar</button>
                <a href="<?php echo e(route('categorias.index')); ?>" class="btn-cancelar">❌ Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html><?php /**PATH /var/www/resources/views/categorias/create.blade.php ENDPATH**/ ?>