<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

if (strlen($login) < 4) {
    echo "login error";
    exit;
}

if (strlen($username) < 4) {
    echo "username error";
    exit;
}

if (strlen($email) < 4 || !str_contains($email, '@')) {
    echo "email error";
    exit;
}

if (strlen($password) < 4) {
    echo "password error";
    exit;
}

header("Location: /about.php");
?>
