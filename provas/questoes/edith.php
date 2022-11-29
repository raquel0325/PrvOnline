<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="edth.css" />
    <title>EDITAR DADOS</title>
</head>
<body>
<div class="frame" id="n1">

</div>
<div class="banner" id="dev1">
            <div class="input" id="dev2">
            <?php
                    require("conexawm.php");
                    $codigo = $_GET['codigo'];
                    $pergunta = $_GET['pergunta'];
                    $alta = $_GET['alta'];
                    $altb = $_GET['altb'];
                    $altc = $_GET['altc'];
                    $altd = $_GET['altd'];
                    $alte = $_GET['alte'];
                    ?>

                    <form action="edit.php" method="POST">
                        CODIGO: <input type="text" name="codigo" id="codigo" value="<?php echo $codigo?>">
                        PERGUNTA: <input type="text" name="pergunta" id="pergunta" value="<?php echo $pergunta?>">
                        ALTA: <input type="text" name="alta" id="alta" value="<?php echo $alta?>">
                        ALTB: <input type="text" name="altb" id="altb" value="<?php echo $altb?>">
                        ALTC: <input type="text" name="altc" id="altc" value="<?php echo $altc?>">
                        ALTD: <input type="text" name="altd" id="altd" value="<?php echo $altd?>">
                        ALTE: <input type="text" name="alte" id="alte" value="<?php echo $alte?>">
                        <input type="submit" value="ATUALIZAR">
                    </form>
            </div>
    
</div>

</body>
</html>