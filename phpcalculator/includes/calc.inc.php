<?php

    declare(strict_types = 1);
    include 'autoLoader.inc.php';

    $oper = $_POST['oper'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $calc = new Calc\Calc((int)$num1, $oper, (int)$num2);

    try{
        echo $calc->calculator();
    }catch (TypeError $e){
        echo "Error!: " . $e->getMessage();
    }

?>