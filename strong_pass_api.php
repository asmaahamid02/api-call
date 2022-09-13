<?php
$pass = $_POST['password'];

function checkPassword($password)
{
    $errors = array();

    if (strlen($password) < 12) {
        $errors['length'] = 'Your password should be at least 12 characters';
    }

    if (!preg_match('@[A-Z]@', $password)) {
        $errors['uppercase'] = 'Your password should contains at least one upper case';
    }

    if (!preg_match('@[a-z]@', $password)) {
        $errors['lowercase'] = 'Your password should contains at least one lower case';
    }

    if (!preg_match('@[0-9]@', $password)) {
        $errors['number'] = 'Your password should contains at least one number';
    }

    if (!preg_match('@[^\w]@', $password)) {
        $errors['special character'] = 'Your password should contains at least one special character';
    }

    return $errors;
}

$validation = checkPassword($pass);

$data['strong_password'] = false;
if (empty($validation)) {
    $data['strong_password'] = true;
}
echo json_encode($data);