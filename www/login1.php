<?php

$fs = "users.csv";
$fr = fopen($fs, "r");
$line = fgetcsv($fr, 1000, ";");

if(isset($_POST['submit1'])){

    //declarer le erreur
    $error = '';
    $error1 = '';
    $error2 = '';

    //declarer valeur form
    $email2 = $_POST['email2'];
    $password1 = $_POST['password1'];

    if(!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        $error1 = '<p><label class="text-danger">Please enter a valid email address</label></p>';
    } else if ($email2 === $line[0]) {
        $email2 = true;
    };

    if($password1 == '') {
        $error2 = '<p><label class="text-danger">Password is required</label></p>';
    } else {
        $password1 = password_hash($password1, PASSWORD_BCRYPT);    
    };

    if ($password1 === $line[1]) {
        $password1 = true;
    };  

    if ($email2 === true && $password1 === true) {
        $error = '<p><label class="text-danger">Credentials are valid, session started!</label></p>';
        session_start();
    };
    var_dump($password1);
};