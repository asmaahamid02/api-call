<?php
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');
include_once "validations.php";

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

$errors = empty_inputs([$str]);
if (count($errors['errors']) > 0) {
    echo json_encode($errors);
} else {
    $data = [
        'string' => $str,
        'is_palindrome' => palindrome($str)
    ];

    echo json_encode($data);
}