<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>proyecto</title>
    </head>
    <body>
         <h1>
            <?php
             $Primeravariable=2;
             $Segundavariable=5;
             $lenguaje="javascribt";
             echo '<br>';
             if ($Primeravariable == 1 && $Segundavariable == 2){
                 echo 'soy menor';
             }
             else {
                 echo 'soy mayor';
             }
             switch ($lenguaje){
             case "php" :
                 echo 'php';
                 break;
             case "javascribt":
                 echo 'javascribt';
                 break;
             case"html":
                 echo 'html';
                 break;
             }
            ?>
         </h1> 
        <p>
        <h2>
                <?php
                  echo 'otra seccion';
                ?>
        </h2>   
        </p>
        
    </body>
</html>
