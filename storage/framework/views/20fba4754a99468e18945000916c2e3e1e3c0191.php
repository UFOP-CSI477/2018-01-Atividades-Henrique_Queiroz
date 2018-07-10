<?php $__env->startSection('conteudo'); ?>

<h2 class="jumbotron text-center">Selecione o Procedimento</h2>

<table class="table table-striped">

    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>ID do Usuário</th>
        <th>Operação</th>
    </tr>

    <?php $__currentLoopData = $procedimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->id); ?></td>
            <td><?php echo e($p->name); ?></td>
            <td><?php echo e($p->price); ?></td>
            <td><?php echo e($p->user_id); ?></td>
            <td><form method="post" onsubmit="return confirm('Confirma exclusão do procedimento?');" action="<?php echo e(route('procedimentos.destroy', $p->id)); ?>">

                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="Excluir">

            </form></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('usuarios.areaAdministrador', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>