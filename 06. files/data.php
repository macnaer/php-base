<?php
if (isset($_POST["submit"])){
    $email = $_POST["email"] . "\n";
    // $file = fopen('db/db.txt', 'a');
    $file = "db/db.txt";
    // fwrite($file, $email);
    // fclose($file);
    file_put_contents($file,  $email, FILE_APPEND | LOCK_EX);
    header('Location: /php/06.%20files/');
    exit();

}