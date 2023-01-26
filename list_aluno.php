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

        echo "  <h4>
                    <font color=\"red\">$msg</font>
                  </h4>";
      }
      ?>

      <br>

      <table width="98%" border="0" align="center" cellpadding="5" cellspacing="2">
        <tr>
          <td colspan="5" bgcolor="#1abc9c">
            <center>
              <font color="#FFFFFF">Lista de Alunos</font>
            </center>
          </td>
        </tr>
        <tr>
          <td width="60%" bgcolor="#F0F0F0" align="left">
            <font color="#333333" size="2"><b>Nome</b></font>
          </td>
          <td width="10%" bgcolor="#F0F0F0">
            <center>
              <font color="#333333" size="2"><b>Idade</b></font>
            </center>
          </td>
          <td width="10%" bgcolor="#F0F0F0">
            <center>
              <font color="#333333" size="2"><b>Matrícula</b></font>
            </center>
          </td>
          <td width="10%" bgcolor="#F0F0F0">
            <center>
              <font color="#333333" size="2"><b>Alterar</b></font>
            </center>
          </td>
          <td width="10%" bgcolor="#F0F0F0">
            <center>
              <font color="#333333" size="2"><b>Apagar</b></font>
            </center>
          </td>
        </tr>

        <?php

        include_once('Aluno.class.php');

        $obj_aluno = new Aluno();
        $alunos = $obj_aluno->List_alunos();

        $i = 0;
        while ($i < count($alunos)) {

          echo "        
                    <tr>
                      <td width=\"60%\" bgcolor=\"#FFFFFF\">
                          <font color=\"#000000\"><b>" . $alunos[$i]['nome'] . "</b></font>
                      </td>
                      <td width=\"10%\" bgcolor=\"#FFFFFF\">
                        <center> <font color=\"#000000\">" . $alunos[$i]['idade'] . "</font></center>
                      </td>
                      <td width=\"10%\" bgcolor=\"#FFFFFF\">
                        <center><font color=\"#000000\">" . $alunos[$i]['matricula'] . "</font></center>
                      </td>
                      <td width=\"10%\" bgcolor=\"#FFFFFF\">
                        <center><font color=\"#000000\"><a href=\"edit_aluno.php?id_aluno=" . $alunos[$i]['id_aluno'] . "\">Alterar</a></font></center>            
                      </td>
                      <td width=\"10%\" bgcolor=\"#FFFFFF\">
                      <center><font color=\"#000000\"><a href=\"del_aluno.php?id_aluno=" . $alunos[$i]['id_aluno'] . "\">Apagar</a></font></center>
                      </td>          
                    </tr>";
          $i++;
        }
        ?>
      </table>
    </center>
  </div>
</body>

</html>