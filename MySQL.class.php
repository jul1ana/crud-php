<?php
class MySQL
{
  private $conection = null;

  public function __construct()
  {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "aplic";

    $mysqli = new mysqli($host, $user, $pass, $db);

    $this->set_conection($mysqli);

    if ($mysqli->connect_errno) {
      printf("Conexão falhou: %s\n", $mysqli->connect_error);
      exit();
    }
  }


  public function get_conection()
  {
    return $this->conection;
  }

  public function set_conection($conection)
  {
    $this->conection = $conection;
  }
}
?>