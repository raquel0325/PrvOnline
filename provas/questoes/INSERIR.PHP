<?php
require("conexawm.php");
$disciplina = 1;
$professor = 1;
//$disciplina = $_POST['disciplina'];
//professor = $_POST['professor'];
$alternartiva = $_POST['alternativa'];
$pergunta = $_POST['pergunta'];
$alta = $_POST['alta'];
$altb = $_POST['altb'];
$altc = $_POST['altc'];
$altd = $_POST['altd'];
$alte = $_POST['alte'];

$correta = 0;

if(isset($_POST['alternativa'])){   
   $a = $_POST['alternativa'];
 
      if($a == "a"){
         $correta = 1;
      }   
}

if(isset($_POST['alternativa'])){   
  
   $b = $_POST['alternativa'];
      if($b == "b"){
         $correta = 2;
      }   
}
if(isset($_POST['alternativa'])){   
  
   $c = $_POST['alternativa'];
      if($c == "c"){
         $correta = 3;
      }   
}
if(isset($_POST['alternativa'])){   
   $d = $_POST['alternativa'];
      if($d == "d"){
         $correta = 4;
      }   
}
if(isset($_POST['alternativa'])){   
  
   $e = $_POST['alternativa'];
      if($e == "e"){
         $correta = 5;
      }   
}
?>
<table BORDER="1">
    <tr>
        <td>PERGUNTA</td>
        <td>ALTA</td>
        <td>ALTB</td>
        <td>ALTC</td>
        <td>ALTD</td>
        <td>ALTE</td>
        <td>EXCLUIR</td>
        <td>EDITAR</td>
    </tr>
    <?php 
    $resultado = $pdo->query("SELECT cod, pergunta, alta, altb, altc, altd, alte FROM QUESTOES");
    ?>
    <?php 
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
      <tr>
        <td><?php echo "{$linha['pergunta']}";?> </td>
        <td><?php echo "{$linha['alta']}";?> </td>
        <td><?php echo "{$linha['altb']}";?> </td>
        <td><?php echo "{$linha['altc']}";?> </td>
        <td><?php echo "{$linha['altd']}";?> </td>
        <td><?php echo "{$linha['alte']}";?> </td>
        <td><a href="excluir.php?codigo=<?php echo "{$linha['cod']}"?>">excluir</a></td>

    </tr>
    <?php
    }
    ?>
   </table>

<?php   
   $res = $pdo->prepare("INSERT INTO QUESTOES (DISCIPLINA, PROFESSOR, ALTERNATIVA, PERGUNTA, ALTA, ALTB, ALTC, ALTD, ALTE)
   VALUES(:disciplina,:professor,:opcao,:pergunta,:alta,:altb,:altc,:altd,:alte)");

   $res->bindParam("disciplina",$disciplina);
   $res->bindParam(":professor",$professor);
   $res->bindParam("opcao",$correta);
   $res->bindParam("pergunta",$pergunta);
   $res->bindParam("alta",$alta);
   $res->bindParam("altb",$altb);
   $res->bindParam("altc",$altc);
   $res->bindParam("altd",$altd);
   $res->bindParam("alte",$alte);
   $res ->execute();
   header('Location:IndEx.php');
?>