<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar Exame</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

  <h2 class="jumbotron text-center">Editar Exame</h2>

    <center>

      <form class="form-inline" method="post" action="<?php echo e(route('exames.update', $exame->id)); ?>">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <label>Data: </label>
        <input class="form-control" type="text" name="name" value="<?php echo e($exame->date); ?>" disabled="disabled"> <br>
        
        <label>ID do Usuário: </label>
        <input class="form-control" type="text" name="user_id" value="<?php echo e($exame->user_id); ?>" disabled="disabled"> <br>

        <label>ID do Procedimento: </label>
        <input class="form-control" type="text" name="procedure_id" value="<?php echo e($exame->procedure_id); ?>" disabled="disabled"> <br>

        <label>Preço: </label>
        <input class="form-control" type="text" name="price" value="<?php echo e($exame->price); ?>" required> <br>

        <br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

      </form>

    </center>

</body>
</html>