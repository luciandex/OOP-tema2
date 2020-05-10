<?php declare(strict_types=1);
require_once "Calculator.php";

echo'Initial value of static variable $value is: '.Calculator::getValue();

?>
    <hr>
<?php

Calculator::add(5);
echo 'After addition: '.Calculator::getValue(); // 5

?>
    <hr>
<?php

Calculator::substract(2);
echo 'After substraction: '.Calculator::getValue(); // 3

?>
    <hr>
<?php

Calculator::multiply(2);
echo 'After multiplication: '.Calculator::getValue(); // 6

?>
    <hr>
<?php

Calculator::clear();
echo 'After clear method: '.Calculator::getValue(); // 0

?>
    <hr>
<?php

Calculator::setValue(10);
Calculator::multiply(6);
echo 'After "set" and "multiply" methods: '.Calculator::getValue(); // 60

?>
    <hr>
<?php

Calculator::divide(3);
echo 'After division: '.Calculator::getValue(); // 20

?>
    <hr>
<?php

Calculator::modulo(8);
echo 'After "modulo" method: '.Calculator::getValue(); // 4

?>
    <hr>
<?php

Calculator::square();
echo 'After "square" method: '.Calculator::getValue(); // 16

?>
    <hr>
<?php

Calculator::squareRoot();
echo 'After "squareRoot" method: '.Calculator::getValue(); // 4

?>
    <hr>
<?php

