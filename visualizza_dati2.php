<?php


//?

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = trim($_POST["nome"]);
$email = trim($_POST["email"]);

if (empty($name)) {
$name_error = "Il nome è obbligatorio";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$email_error = "L'indirizzo email non è valido";
}

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
}
?>