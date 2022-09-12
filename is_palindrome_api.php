<?php
$str = $_GET['string'];

function palindrome($string){
$rev_str = strrev($string);
if($rev_str == $string){
return true;
}
return false;
}

$data = [
'string' => $str,
'is_palindrome' => palindrome($str)
];

echo json_encode($data)
?>