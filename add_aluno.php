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

      if ($_REQUEST['msg']) {
        $msg = $_REQUEST['msg'];

        echo " <h4>
                  <font color=\"red\">$msg</font>
                </h4>";
      }
      ?>


      <h3> Adicionar Aluno </h3>
      <br>
      <form name="form1" method="post" action="add_aluno_2.php">
        Nome: <input type="text" name="nome" id="nome" />
        <br><br>

        Idade: <input type="text" name="idade" id="idade" />
        <br><br>

        Matrícula: <input type="text" name="matricula" id="matricula" />
        <br><br>

        <input name="botao" type="submit" value="  Adicionar  " />
      </form>
    </center>
  </div>
</body>

</html>