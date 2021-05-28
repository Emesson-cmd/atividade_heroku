<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // como colocar para aparecer "double" no banco de dados?
  $sql = "INSERT INTO alunos (nome, disciplina, nota_1, nota_2)
  VALUES ('Jarbas Júnior', 'Interação Humnao-Computador', 6, 10)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Novo registro riado com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?> 