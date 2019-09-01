<?php
  require("classes/quadrado.php");

  if($_POST){
    $arestaumForm = $_POST['arestaum'];
    $arestadoisForm = $_POST['arestadois'];
  
    $area = new Quadrado();
  
    $area->arestaumProp = $arestaumForm;
    $area->arestadoisProp = $arestadoisForm;
  
    $resultado = $area->quadrado();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital House</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <form class="" action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="arestaUm">Aresta Um</label>
            <input type="text" class="form-control" name="arestaUm" id="arestaUm">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="arestaDois">Aresta Dois</label>
            <input type="text" class="form-control" name="arestaDois" id="arestaDois">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </form>
    <?php if($resultado): ?>
      <div class="col-md-12">
        <div class="col-md-2 alert alert-success">
          <p><?= "A área do quadrado é: " . $resultado ?></p>
        </div>
      </div>
    <?php endif; ?>
  </body>
</html>
