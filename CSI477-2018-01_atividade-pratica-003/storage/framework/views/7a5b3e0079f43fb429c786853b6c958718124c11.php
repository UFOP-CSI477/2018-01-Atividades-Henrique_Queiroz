<?php $__env->startSection('conteudo'); ?>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Ação</th>
		</tr>

		<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<tr>
			<td><?php echo e($u->id); ?></td>
			<td><?php echo e($u->name); ?></td>
			<td><?php echo e($u->email); ?></td>
			<td><a href="/usuarios/<?php echo e($u->id); ?>">Exibir</a></td>
		</tr>	

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>