<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/form.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>Editar Categoria</h1>
        
        <div class="info-categoria">
            Editando categoria ID: <strong><?php echo e($categoria->id); ?></strong>
        </div>
        
        <form action="<?php echo e(route('categorias.update', $categoria)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="form-group">
                <label>Nome <span class="obrigatorio">*</span></label>
                <input type="text" name="nome" value="<?php echo e($categoria->nome); ?>" placeholder="Digite o nome da categoria" required>
            </div>
            
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao" placeholder="Digite uma descrição (opcional)"><?php echo e($categoria->descricao); ?></textarea>
            </div>
            
            <div class="botoes">
                <button type="submit" class="btn-atualizar">💾 Atualizar</button>
                <a href="<?php echo e(route('categorias.index')); ?>" class="btn-cancelar">❌ Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html><?php /**PATH /var/www/resources/views/categorias/edit.blade.php ENDPATH**/ ?>