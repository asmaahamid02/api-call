<?php
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
function checkPassword($password)
{
    $errors = array();

    //check password length
    if (strlen($password) < 12) {
        $errors['length'] = 'Your password should be at least 12 characters';
    }

    //check if password contains uppercase
    if (!preg_match('@[A-Z]@', $password)) {
        $errors['uppercase'] = 'Your password should contains at least one upper case';
    }

    //check if password contains lowercase
    if (!preg_match('@[a-z]@', $password)) {
        $errors['lowercase'] = 'Your password should contains at least one lower case';
    }

    //check if password contains number
    if (!preg_match('@[0-9]@', $password)) {
        $errors['number'] = 'Your password should contains at least one number';
    }

    //check if password contains special character
    if (!preg_match('@[^\w]@', $password)) {
        $errors['special character'] = 'Your password should contains at least one special character';
    }

    return $errors;
}

$data['strong_password'] = false;
$pass = $_POST['password'];
$validation = checkPassword($pass);


if (count($validation) <= 0) {
    $data['strong_password'] = true;
}
echo json_encode($data);