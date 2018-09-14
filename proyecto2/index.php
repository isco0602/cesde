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
             echo '<br>';
             $arreglo=[2,"hola",5];
            
             //echo $arreglo[2];
             
             //arreglos
            ?>
         </h1> 
        <pre>
            <h3>
                <?php
                           $dato= array_pop($arreglo);
                           print_r($arreglo);
                           //arreglos asociativa
                           $usuarios=array("nombre=>juan",
                           "apellidos"=>"zabala","cedula"=>123);
                       echo "<hl>".$usuarios['nombre']. "</h1>";
                           
             ?>
             </h3>
        </pre>
        <p>
        <h2>
                <?php
                  echo 'otra seccion';
                ?>
        </h2>   
        </p>
        
    </body>
</html>
