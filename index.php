<?php

/**
 * Phpcode - A PHP sample code
 * php version 8.0.7
 *
 * @category Learn
 * @package  Laravel
 * @author   Godson  <nielvidservices@gmail.com>
 * @license  MIT www.nielvid.com
 * @link     www.nielvid.com
 */


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $equal = null;
    if (gettype($num1) != 'integer' || gettype($num1) != 'integer') {
        $error = "Either of the numbers is/are integer";
    } else {
        $equal =  $num1 + $num2;
    }




    function numbers($a, $b)
    {
        $items = range($a, $b);
        return $items;
    }

    function sumOfNumbers($item, $next)
    {
        $item += $next;
        return $item;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SideHustle Week-1 Task</title>
    <style>
        body {
            width: 40%;
            margin: 20px auto;
            padding: 10px;
            border: 2px solid green;
            border-radius: 25px;
        }
    </style>
</head>

<body>
    <h1>Task Title: Week 1 task for web design and development (backend)</h1>

    <p> Write a range function that takes two arguments,
        start and end, and returns an array containing all the
        numbers from start up to (and including) end. Next,
        write a sum function that takes an array
        of numbers and returns the sum of these numbers.</p>

    <h2>Solution</h2>
    <form action="index.php" method="POST">
        <input type="text" name="number1" placeholder="enter a lower nunber"> <?php echo $_POST['number1']; ?>
        <input type="text" name="number2" placeholder="enter a higher nunber"> <?php echo $_POST['number2']; ?>
        <input type="submit" value="Submit">
    </form>
    <p>
        <?php echo $equal; ?>

    </p>
    <h3> Sum of numbers between <?php echo $num1 ?> - <?php echo $num2; ?> is:
        <?php
        try {
            print_r(array_reduce(numbers($num1, $num2), "sumOfNumbers"));
        } catch (Exception $e) {
            echo "Invalid Input";
        }
        ?>
    </h3>
    <script>

    </script>
</body>

</html>