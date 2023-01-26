<?php

include_once("Aluno.class.php");

$id_aluno = $_REQUEST['id_aluno'];

$obj_aluno = new Aluno();

if ($obj_aluno->Del_aluno($id_aluno)) {
  $msg = "Aluno deletado com sucesso!";
} else {
  $msg = "Erro ao deletar o aluno!";
}

header("Location: list_aluno.php?msg=$msg");

?>