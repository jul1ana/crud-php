<?php

include_once('MySQL.class.php');

class Aluno
{
  private $id_aluno;
  private $nome;
  private $idade;
  private $matricula;
  private $status_aluno;
  private $conexao;

  public function __construct()
  {
    $mysql = new MySQL();
    $this->conexao = $mysql->get_conection();
  }

  public function get_id_aluno()
  {
    return $this->id_aluno;
  }

  public function set_id_aluno($id_aluno)
  {
    $this->id_aluno = $id_aluno;
  }

  public function get_nome()
  {
    return $this->nome;
  }

  public function set_nome($nome)
  {
    $this->nome = $nome;
  }

  public function get_idade()
  {
    return $this->idade;
  }

  public function set_idade($idade)
  {
    $this->idade = $idade;
  }

  public function get_matricula()
  {
    return $this->matricula;
  }

  public function set_matricula($matricula)
  {
    $this->matricula = $matricula;
  }

  public function get_status_aluno()
  {
    return $this->status_aluno;
  }

  public function set_status_aluno($status_aluno)
  {
    $this->status_aluno = $status_aluno;
  }


  public function Add_aluno()
  {

    $query = "SELECT MAX(id_aluno) id_aluno from tb_aluno;";
    $result = $this->conexao->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $id_aluno = $row['id_aluno'];
    $id_aluno++;
    $this->set_id_aluno($id_aluno);

    $this->set_status_aluno("A");
    $query = "INSERT INTO tb_aluno VALUES($this->id_aluno , \"$this->nome\",$this->idade, $this->matricula, \"$this->status_aluno\");";

    if ($this->conexao->query($query) === TRUE) {

      return true;

    } else {
      echo "Erro ao tentar inserir dados no banco.";
      exit();
    }
  }


  public function List_alunos()
  {
    $query = "SELECT * from tb_aluno where status_aluno=\"A\";";
    $result = $this->conexao->query($query);

    $i = 0;
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $alunos[$i]['id_aluno'] = $row["id_aluno"];
      $alunos[$i]['nome'] = $row["nome"];
      $alunos[$i]['idade'] = $row["idade"];
      $alunos[$i]['matricula'] = $row["matricula"];
      $i++;
    }

    return $alunos;
  }


  public function Get_aluno($id_aluno)
  {
    $query = "SELECT * from tb_aluno where id_aluno = $id_aluno;";
    $result = $this->conexao->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    return $row;
  }


  public function Edit_aluno()
  {
    $query = "UPDATE tb_aluno set nome=\"$this->nome\",idade=$this->idade, matricula=$this->matricula where id_aluno =$this->id_aluno;";

    if ($this->conexao->query($query) === TRUE) {

      return true;

    } else {
      echo "Erro ao tentar alterar dados no banco.";
      exit();
    }
  }


  public function Del_aluno($id_aluno)
  {
    $query = "UPDATE tb_aluno set status_aluno=\"I\" where id_aluno = $id_aluno;";

    if ($this->conexao->query($query) === TRUE) {

      return true;

    } else {
      echo "Erro ao tentar alterar dados no banco.";
      exit();
    }
  }
}
?>