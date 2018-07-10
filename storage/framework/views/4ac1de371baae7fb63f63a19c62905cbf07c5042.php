<?php $__env->startSection('conteudo'); ?>

    <h2 class="jumbotron text-center">Inserir Procedimento</h2>

    <center>

      <form class="form-inline" method="post" action="<?php echo e(route('procedimentos.store')); ?>">

        <?php echo csrf_field(); ?>

        <label>Nome: </label>
        <input class="form-control" type="text" name="name"><br>

        <label>Preço: </label>
        <input class="form-control" type="text" name="price"><br>

        <label>Seu ID: </label>
        <input class="form-control" type="text" name="user_id"><br><br>

        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

      </form>

    </center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('usuarios.areaAdministrador', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>