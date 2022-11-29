<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexx.css">

    <title>cadastrar</title>
</head>
<body>
<main class="main-container">
<?php
require("conection.php");
$resultado = $pdo->query("SELECT cod, descricao FROM turma");
?>

<div class="form-container">
            <form action="insert.php" name="cadastrar" method="post">
            <div name="cadastrar">
                <div class="input-group">
                    <label for="matricula">matricula</label>
                    <input type="text" name="matricula" id="matricula">
                </div>
                <div class="input-group">
                    <label for="nome">nome</label>
                    <input type="text" name="nome" id="nome"  placeholder="digite seu nome">
                </div>
                <div class="input-group">
                    <label for="sobrenome">sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome" placeholder="digite seu sobrenome">
                </div>
                <div class="input-group">
                    <label for="email">email</label>
                    <input type="email" id="email" name="email" placeholder="digite seu email">
                </div>
                <div class="input-group w50">
                    <label for="senha"> senha</label>
                    <input type="password" id="senha" name="senha" placeholder="digite sua senha">
                </div>
                <div class="input-group">
                    <label for="turma">turma</label>
                    <select name="turma" id="turma">
                        <option> Selecione ...</option>
                        <?php 
                        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo "{$linha['cod']}";?>"> <?php echo "{$linha['descricao']}";?></option>
                        <?php  
                        }
                        ?>
                    
                    </select>
                </div>
            <div class="input-group">
                <input type="submit" value="cadastrar">
            </div>
            </div>
            </form>
</div>
        </main>
</body>
</html>