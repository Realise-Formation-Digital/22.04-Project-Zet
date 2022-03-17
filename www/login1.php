<?php
session_start();

include "register.php";

$ft = fopen($fs, "r");

function get_credentials() {
    if(isset($ft)) {
        while ($line = fgetcsv($ft)) {
        $lines[] = $line;
        }
    } else {
    
    }
    return $lines;
}

if(isset($_POST['submit1'])){

    $credentials = get_credentials();

    //declarer le erreur
    $error = '';
    $error1 = '';
    $error2 = '';

    //declarer valeur form
    $email2 = $_POST['email2'];
    $password = $_POST['password1'];

    if(!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        $error1 = '<p><label class="text-danger">Please enter a valid email address</label></p>';
    } else {
        
    };

    if($password1 =='') {
        $error2 = '<p><label class="text-danger">password is required</label></p>';
    } else {
        $password1 = password_verify($password1);
    };

    $user = array(
        $email2,
        $password1,
    );

    $check_credentials = function($email2, $password1) use ($credentials) {
        foreach($credentials as $credential)
            if($credential[0] == $email2 && $credential[1] == $password1)
                return true;
    
        return false;
    };

    $error = $check_credentials($email2, $password1);
}