<?php
    require_once('Tarefa.php');
    require_once('ToDoList.php');

    $toDoList = new ToDoList();

    $tarefa1 = new Tarefa('titulo', 'descricao', '2018-08-09', '2018-08-10', '', 'Baixa');
    $toDoList->adicionarTarefa($tarefa1);

    $tarefa2 = new Tarefa('titulo2', 'descricao2', '1998-06-01', '2000-06-01', '2018-08-09', 'Alta');
    $toDoList->adicionarTarefa($tarefa2);

    $tarefa3 = new Tarefa('titulo3', 'descricao3', '2000-06-01', '2002-06-01', '2018-08-14', 'Normal');
    $toDoList->adicionarTarefa($tarefa3);

    $tarefa4 = new Tarefa('titulo4', 'descricao4', '2000-06-01', '2002-06-01', '2018-08-15', 'Alta');
    $toDoList->adicionarTarefa($tarefa4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDoList Orientada a Objetos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
    <section>
      <h3>Exibindo Todas Tarefas Inseridas</h3>
      <div></div>
      <?php
        foreach ($toDoList->getTarefas() as $tarefa) {
          echo $tarefa->titulo;
        }
      ?>
    </section>

    <section>
      <h3>Exibindo tarefas que devem ser entregues no dia corrente</h3>
      <div></div>
      <?php
        var_dump($toDoList->entregaHoje());
      ?>
    </section>

    <section>
      <h3>Exibindo tarefas que devem ser entregues na semana</h3>
      <div></div>
      <?php
        var_dump($toDoList->entregarNaSemana());
      ?>
    </section>

    <section>
      <h3>Exibindo tarefas que estão atrasadas</h3>
      <div></div>
      <?php
        var_dump($toDoList->entregasAtrasadas());
      ?>
    </section>

    <section>
      <h3>Exibindo tarefas que estão finalizadas</h3>
      <div></div>
      <?php
        var_dump($toDoList->entregasFinalizadas());
      ?>
    </section>

    <section>
      <h3>Ordenando tarefas por prioridade</h3>
      <div></div>
      <?php
        var_dump($toDoList->ordenarItens());
      ?>
    </section>

    <section>
      <h3>Excluindo a última terefa</h3>
      <div></div>
      <?php
        var_dump($toDoList->excluindoUltimaTarefa());
      ?>
    </section>
  </div>
</body>
</html>
