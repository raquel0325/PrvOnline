<?php
require("conection.php");
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$turma = $_POST['turma'];


   $res = $pdo->prepare("INSERT INTO aluno(matricula,nome,sobrenome,email,senha,turma)
   VALUES(:m,:n,:so,:e,:se,:t)");

   $res->bindParam("m",$matricula);
   $res->bindParam("n",$nome);
   $res->bindParam("so",$sobrenome);
   $res->bindParam("e", $email);
   $res->bindParam("se", $senha);
   $res->bindParam("t", $turma);
   $res ->execute();
   ?>