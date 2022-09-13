<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$data = array();

if (empty($a) || empty($b) || empty($c)) {
    $data['error'] = 'No full data entered';
} else {
    $result = pow($a, 3) + $b * $c + $a / $b;
    $data = [
        'expression' => 'a^3 + b*c - a/b',
        'result' => $result
    ];
}

echo json_encode($data);