<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar Procedimento</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

  <h2 class="jumbotron text-center">Editar Procedimento</h2>

    <center>

      <form class="form-inline" method="post" action="<?php echo e(route('atualizaPreco')); ?>">

        <?php echo csrf_field(); ?>
        <label>Nome: <?php echo e($procedimento->name); ?></label><br>
        
        <label>ID do Usuário: <?php echo e($procedimento->user_id); ?></label><br>

        <input type="hidden" name="id" value="<?php echo e($procedimento->id); ?>">

        <label>Preço: </label>
        <input class="form-control" type="text" name="price" value="<?php echo e($procedimento->price); ?>" required><br>

        <br>
        <input class="btn btn-info" type="submit" name="btnSalvar" value="Salvar">

      </form>

    </center>

</body>
</html>