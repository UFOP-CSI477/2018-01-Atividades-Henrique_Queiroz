<?php $__env->startSection('conteudo'); ?>

<h2 class="jumbotron text-center">Lista de Exames</h2>

<table class="table table-striped">

    <tr>
        <th>Código</th>
        <th>Data</th>
        <th>ID do Usuário</th>
        <th>ID do Procedimento</th>
    </tr>

    <?php $__currentLoopData = $exames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($e->id); ?></td>
            <td><?php echo e($e->date); ?></td>
            <td><?php echo e($e->user_id); ?></td>
            <td><?php echo e($e->procedure_id); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('usuarios.areaAdministrador', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>