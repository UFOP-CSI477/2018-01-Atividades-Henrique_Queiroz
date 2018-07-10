<?php $__env->startSection('conteudo'); ?>

<h2 class="jumbotron text-center">Cadastro de Administrador</h2>

<center>
    <form class="form-inline" action="<?php echo e(route('usuarios.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label>Nome: </label>
        <input class="form-control" type="text" name="name" required><br>

        <label>E-mail: </label>
        <input class="form-control" type="text" name="email" required><br>

        <label>Senha: </label>
        <input class="form-control" type="password" name="password" required><br><br>

        <input type="hidden" name="type" value="1">

        <input  class="btn btn-info" type="submit" name="cadastrar" value="Cadastrar">
    </form>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('usuarios.areaAdministrador', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>