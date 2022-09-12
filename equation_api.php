<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$data['expression'] = 'a^3 + b*c - a/b';

$result = pow($a,3) + $b*$c + $a/$b;

$data = [
'expression' => 'a^3 + b*c - a/b',
'result' => $result];

echo json_encode($data)
?>