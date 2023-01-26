<?php

include_once("Aluno.class.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$matricula = $_POST['matricula'];

$obj_aluno = new Aluno();
$obj_aluno->set_nome($nome);
$obj_aluno->set_idade($idade);
$obj_aluno->set_matricula($matricula);

if ($obj_aluno->Add_aluno()) {
  $msg = "Aluno adicionado com sucesso!";
} else {
  $msg = "Erro ao adicionar o aluno!";
}

header("Location: add_aluno.php?msg=$msg");
?>