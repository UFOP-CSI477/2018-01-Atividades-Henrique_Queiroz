<?php $__env->startSection('conteudo'); ?>

    <h2 class="jumbotron text-center">Editar Procedimento</h2>

    <form class="fomr-inline" method="post" action="<?php echo e(route('procedimentos.update', $procedimento->id)); ?>">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <label>Nome: </label>
        <input class="form-control" type="text" name="name" value="<?php echo e($procedimento->name); ?>" required> <br>
        
        <label>Preço: </label>
        <input class="form-control" type="text" name="price" value="<?php echo e($procedimento->price); ?>" required> <br>

        <select name="user_id">
          <option value="">Selecione o Administrador:</option>
          <!-- Dados dos estados //-->
          <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($u->id); ?>"
                <?php if( $u->id == $procedimento->id ): ?>
                    selected
                <?php endif; ?>
              ><?php if( $u->type == 1): ?>
                  <?php echo e($u->name); ?>

                <?php endif; ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('usuarios.areaAdministrador', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>