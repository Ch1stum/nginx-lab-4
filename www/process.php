<?php
session_start();

$username = htmlspecialchars($_POST['username'] ?? '');
$userage = htmlspecialchars($_POST['userage'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$theme = htmlspecialchars($_POST['theme'] ?? '');
$materials = isset($_POST['materials']) ? 'Да' : 'Нет';
$format = htmlspecialchars($_POST['format'] ?? '');
$date = htmlspecialchars($_POST['date'] ?? '');

$errors = [];

if (empty($username)) $errors[] = "Имя не может быть пустым";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Некорректный email";

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
}

$_SESSION['username'] = $username;
$_SESSION['userage'] = $userage;
$_SESSION['email'] = $email;
$_SESSION['theme'] = $theme;
$_SESSION['materials'] = $materials;
$_SESSION['format'] = $format;
$_SESSION['date'] = $date;

$line = $username . ";" . $email . "\n";
file_put_contents("data.txt", $line, FILE_APPEND);

header("Location: index.php");
exit();
