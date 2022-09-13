<?php
function palindrome($string)
{
    //reverse string
    $rev_str = strrev($string);
    if ($rev_str == $string) {
        return true;
    }
    return false;
}

$str = $_GET['string'];

$data = [
    'string' => $str,
    'is_palindrome' => palindrome($str)
];

echo json_encode($data);