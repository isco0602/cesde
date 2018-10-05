<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        class coche{
            public $rueda;
            private $color;
            public $motor;
            public function __construct() {
                $this->color="rojo";
                $this->rueda=4;
            }
            //metodo
            function arrancar(){
            echo 'estoy arrancando';
            }
        }
         $carro = new coche();
            $carro->arrancar();
        ?>
    </body>
</html>
