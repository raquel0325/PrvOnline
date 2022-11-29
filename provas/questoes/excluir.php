<?php
require("conexawm.php");
$codigo = $_GET['codigo'];



$res = $pdo->prepare("DELETE FROM QUESTOES WHERE COD = :codigo");
$res->bindParam(":codigo", $codigo);
$res->execute();
header('Location:IndEx.php');

?>