<?php $__env->startSection('conteudo'); ?>

<h2 class="jumbotron text-center">Lista de Procedimentos</h2>

<table class="table table-striped">

    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>E-amil</th>
        <th>Tipo</th>
    </tr>

    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($u->id); ?></td>
            <td><?php echo e($u->name); ?></td>
            <td><?php echo e($u->email); ?></td>
            <td><?php echo e($u->type); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('usuarios.areaAdministrador', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>