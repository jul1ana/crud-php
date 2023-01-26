<?php

include_once("Aluno.class.php");

$id_aluno = $_POST['id_aluno'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$matricula = $_POST['matricula'];

$obj_aluno = new Aluno();
$obj_aluno->set_id_aluno($id_aluno);
$obj_aluno->set_nome($nome);
$obj_aluno->set_idade($idade);
$obj_aluno->set_matricula($matricula);

if ($obj_aluno->Edit_aluno()) {
  $msg = "Dados do aluno editado com sucesso!";
} else {
  $msg = "Erro ao editar dados do aluno!";
}

header("Location: list_aluno.php?msg=$msg");
?>