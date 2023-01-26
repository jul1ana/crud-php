<html>

<head>
  <link rel="stylesheet" type="text/css" href="folha_estilo.css">
  <link rel="stylesheet" type="text/css" href="folha_estilo2.css">
  <!-- Fontes de Google -->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <!-- Ícones -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <title>Aplicação teste</title>
</head>

<body>

  <div class="classe01">

    <?php include_once("menu.php"); ?>
    <center>
      <br>
      <hr size='1' width='90%'>
      <br>

      <?php
      include_once('Aluno.class.php');

      $id_aluno = $_REQUEST['id_aluno'];

      $obj_aluno = new Aluno();
      $aluno = $obj_aluno->Get_aluno($id_aluno);
      ?>

      <form name="form1" method="post" action="edit_aluno_2.php">
        <input type="hidden" name="id_aluno" value="<?php echo $_REQUEST['id_aluno']; ?>">

        Nome:
        <input type="text" name="nome" id="nome" value="<?php echo $aluno['nome']; ?>" />
        <br><br>

        Idade:
        <input type="text" name="idade" id="idade" value="<?php echo $aluno['idade']; ?>" />
        <br><br>

        Matrícula:
        <input type="text" name="matricula" id="matricula" value="<?php echo $aluno['matricula']; ?>" />
        <br><br>


        <input name="botao" type="button" value="  Cancelar  " onclick="document.location.href='list_aluno.php'" />

        <input name="botao" type="submit" value="  Alterar  " />
      </form>
    </center>
  </div>
</body>

</html>