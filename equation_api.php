<?php
function calculate($num1, $num2, $num3)
{
    return pow($num1, 3) + $num2 * $num3 + $num1 / $num2;
}

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$data = array();

if (empty($a) || empty($b) || empty($c)) {
    $data['error'] = 'some data are missing';
} else {
    $data = [
        'expression' => 'a^3 + b*c - a/b',
        'result' => calculate($a, $b, $c)
    ];
}

echo json_encode($data);