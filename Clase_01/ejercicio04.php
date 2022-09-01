<?php
// Vazzana Micaela
// Ejercicio 04
/*Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/

$operador = "/";

$op1 = 25;
$op2 = 5;

switch($operador)
{
    case '+':
        echo $op1 + $op2;
        break;
    case '-':
        echo $op1 - $op2;
        break;
    case '*':
        echo $op1 * $op2;
        break;
    case '/':
        if($op2 != 0)
            echo $op1 / $op2;
        else
            echo "No se puede dividir por 0";
        break;
}
?>