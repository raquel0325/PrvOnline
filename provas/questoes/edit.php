<?php
require("conexawm.php");

$codigo = $_POST['codigo'];
$pergunta = $_POST['pergunta'];
$alta = $_POST['alta'];
$altb = $_POST['altb'];
$altc = $_POST['altc'];
$altd = $_POST['altd'];
$alte = $_POST['alte'];

$res = $pdo->prepare("UPDATE QUESTOES SET pergunta = :pergunta, alta = :alta, altb = :altb
, altc = :altc, altd = :altd, alte = :alte WHERE COD = :codigo");


$res->bindValue(":pergunta", $pergunta);
$res->bindValue(":alta", $alta);
$res->bindValue(":altb", $altb);
$res->bindValue(":altc", $altc);
$res->bindValue(":altd", $altd);
$res->bindValue(":alte", $alte);
$res->bindValue(":codigo", $codigo);
$res->execute();
header('Location:IndEx.php');
?>
