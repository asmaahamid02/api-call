<?php
include_once "validations.php";

function calculate($num1, $num2, $num3)
{
    return pow($num1, 3) + $num2 * $num3 + $num1 / $num2;
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$errors = empty_inputs([$a, $b, $c]);
if ($b == 0) {
    $errors['b'] = 'b cannot be zero!';
}

if (!empty($errors['errors'])) {

    echo json_encode($errors);
} else {
    $data = [
        'expression' => 'a^3 + b*c - a/b',
        'result' => calculate($a, $b, $c)
    ];
    echo json_encode($data);
}