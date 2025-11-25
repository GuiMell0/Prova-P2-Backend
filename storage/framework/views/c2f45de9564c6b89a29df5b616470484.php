<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div>
                <h1>📋 Sistema de Categorias</h1>
                <p class="header-subtitle">Gerencie suas categorias de forma simples e eficiente</p>
            </div>
        </div>
    </header>

    <!-- Container -->
    <div class="container">
        <h2 class="section-title">Lista de Categorias</h2>
        <a href="<?php echo e(route('categorias.create')); ?>" class="btn-novo">➕ Nova Categoria</a>
        
        <?php if($categorias->count() > 0): ?>
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
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($categoria->id); ?></td>
                    <td><strong><?php echo e($categoria->nome); ?></strong></td>
                    <td><?php echo e($categoria->descricao ?? 'Sem descrição'); ?></td>
                    <td>
                        <div class="acoes">
                            <a href="<?php echo e(route('categorias.edit', $categoria)); ?>" class="btn-editar">✏️ Editar</a>
                            <form action="<?php echo e(route('categorias.destroy', $categoria)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn-excluir">🗑️ Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php else: ?>
        <p class="mensagem-vazia">Nenhuma categoria cadastrada ainda. Clique em "Nova Categoria" para começar.</p>
        <?php endif; ?>
    </div>
</body>
</html><?php /**PATH /var/www/resources/views/categorias/index.blade.php ENDPATH**/ ?>