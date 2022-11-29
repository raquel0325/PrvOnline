<?php
   try {
     $pdo = new PDO("mysql:dbname=provas;host=localhost","root","");
   } 
   catch (provasException $e) {
     echo "error bd".$e->getMessage();
   }
   catch (Exception $e) {
    echo "erro".$e->getMessage();
   }
   //-------------------------inserir--------------------//
    
    ?>