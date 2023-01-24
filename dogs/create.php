<?php 
  header("location:index.php");
  include './inc/open_dbconn.php';

  $nome = $_POST["nome"];
  $raca = $_POST["raca"];
  $data_nascimento = $_POST["data_nascimento"];

  $stmt = $dbconn->prepare("INSERT INTO dogs (nome,raca,data_nascimento) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $nome, $raca, $data_nascimento);

  $stmt->execute();
  $stmt->close();

  include './inc/close_dbconn.php';
?>
