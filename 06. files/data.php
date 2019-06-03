<?php
if (isset($_POST["submit"])){
    $email = $_POST["email"] . "\n";
    $password = $_POST["password"] . "\n";
    $file = "db/db.txt";
    $person = ["<div class='red'>", $email,$password, "</div>", "|" ];
    file_put_contents($file, $person, FILE_APPEND | LOCK_EX);

    header('Location: /php/06.%20files/');
    exit();

}