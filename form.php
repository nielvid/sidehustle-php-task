<?php
echo "i am working";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];

    $equal =  $num1 + $num2;

    echo $equal;
}
