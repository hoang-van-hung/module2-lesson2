<?php
$username=null;
$email =null;
$phone =null;
$has_Err= null;

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    var_dump($username ,$email ,$phone);

    if (empty($username)) {
        $usernameErr = "Input your name";
        $has_Err = true;
    }
    if (empty($email)) {
        $emailErr = "Input your email";
        $has_Err = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Wrong Format (name@abc.abc)";
            $has_Err = true;
        }
    }
    if (empty($phone)) {
        $phoneErr = "Input your phone number !";
        $has_Err = true;
    }
    if ($has_Err == false) {
        saveDataJSON('data.json', $username, $email, $phone);
        $name = null;
        $email = null;
        $phone = null;
    }
}
