<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inx.css">

    

    <title>Document</title>
</head>
<body>
<main class="main-container">
                                                        <?php
                                                        require("conexawm.php");
                                                        $resultado = $pdo->query("SELECT cod, nome FROM professor");
                                                        ?>
                                                        <?php
                                                        require("conexawm.php");
                                                        $disciplina = $pdo->query("SELECT cod, disciplina FROM disciplina");
                                                        ?>
                                                        



<div class="form">
    <form action="INSERIR.PHP" nome="cadastrarquestao" method="POST">
    <div class="input-group">
                    <label for="professor">PROFESSOR(A)</label>
                    <select name="professor" id="professor">
                        <option> Selecione ...</option>
                        <?php 
                        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo "{$linha['cod']}";?>"> <?php echo "{$linha['nome']}";?></option>
                        <?php  
                        }
                        ?>
                    
                    </select>
                </div>



                <div class="input-group">
                    <label for="dsciplina">DISCIPLINA</label>
                    <select name="dsciplina" id="dsciplina">
                        <option> Selecione ...</option>
                        <?php 
                        while($linha = $disciplina->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo "{$linha['cod']}";?>"> <?php echo "{$linha['disciplina']}";?></option>
                        <?php  
                        }
                        ?>
                    
                    </select>
                </div>


    <label for="cadastro-de-questoes">CADASTRO DE QUESTÕES</label>
        <div name="questoes">
        <div class="input-group">
        <label for="PERGUNTA">PERGUNTA</label>
        <TExtarea col="475" row="44"  name="pergunta" id="pergunta"  placeholder="DIGITE UMA QUESTAO" style="width:415px;height:47px">
        </TExtarea>
        </div>

        <div class="input-group">
        <label for="ALTERNATIVA">ALTERNATIVA A</label>
        <input type="radio" name="alternativa" id="a1"  value="a" >
        <TExtarea col="420" row="60"  name="alta" id="alta"  placeholder="DIGITE UMA ALTERNATIVA" style="width:415px;height:47px">
        </TExtarea>
        </div>

        <div class="input-group">
        <label for="ALTERNATIVA">ALTERNATIVA B</label>
        <input type="radio" name="alternativa" id="a2" value="b">
        <TExtarea col="420" row="60"  name="altb" id="altb"  placeholder="DIGITE UMA ALTERNATIVA" style="width:415px;height:47px" >
        </TExtarea>
        </div>

        <div class="input-group">
        <label for="ALTERNATIVA">ALTERNATIVA C</label>
        <input type="radio" name="alternativa" id="a3" value="c">
        <TExtarea col="420" row="60"  name="altc" id="altc"  placeholder="DIGITE UMA ALTERNATIVA" style="width:415px;height:47px">
        </TExtarea>
        </div>

        <div class="input-group">
        <label for="ALTERNATIVA">ALTERNATIVA D</label>
        <input type="radio" name="alternativa" id="a4" value="d">
        <TExtarea col="420" row="60"  name="altd" id="altd"  placeholder="DIGITE UMA ALTERNATIVA" style="width:415px;height:47px">
        </TExtarea>
        </div>

        <div class="input-group">
        <label for="ALTERNATIVA">ALTERNATIVA E</label>
        <input type="radio" name="alternativa" id="a5" value="e">
        <TExtarea col="420" row="60"  name="alte" id="alte"  placeholder="DIGITE UMA ALTERNATIVA" style="width:415px;height:47px">
        </TExtarea>
        </div>
        
        <div class="elem">
    <input type="submit" value="cadastrarquestao">
 </div>
        </div>
    </form>
                    </div>
<div      class="listar">
<table  id="customers">
<tr>
        <th>PERGUNTA</th>
        <th>ALTA</th>
        <th>ALTB</th>
        <th>ALTC</th>
        <th>ALTD</th>
        <th>ALTE</th>
        <th>EXCLUIR</th>
        <th>EDITAR</th>
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
        <td><a href="edith.php?codigo=<?php echo "{$linha['cod']}"?>
        &pergunta=<?php echo "{$linha['pergunta']}"?>
        &alta=<?php echo "{$linha['alta']}"?>
        &altb=<?php echo "{$linha['altb']}"?>
        &altc=<?php echo "{$linha['altc']}"?>
        &altd=<?php echo "{$linha['altd']}"?>
        &alte=<?php echo "{$linha['alte']}"?>
        ">editar</a></td>

    </tr>
    <?php
    }
    ?>
   </table>
</div>






                    
                    
</main>
</body>
</html>