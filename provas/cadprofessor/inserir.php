<?php
require("conexão.php");
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

   $res = $pdo->prepare("INSERT INTO PROFESSOR(nome,sobrenome,email,senha)
   VALUES(:n,:so,:e,:se)");
   $res->bindParam("n",$nome);
   $res->bindParam("so",$sobrenome);
   $res->bindParam("e", $email);
   $res->bindParam("se", $senha);
   $res ->execute();
   ?>