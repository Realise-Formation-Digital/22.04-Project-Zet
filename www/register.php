<?php

if(isset($_POST['submit'])){

    //declarer le erreur
    $error = '';
    $error1 = '';
    $error2 = '';

    //declarer valeur form
    $email1 = $_POST['email1'];
    $password = $_POST['password'];

    if(!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
        $error1 = '<p><label class="text-danger">Please enter a valid email address</label></p>';
    } else {
        
    };

    if($password =='') {
        $error2 = '<p><label class="text-danger">password is required</label></p>';
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT);
    };

    if($error1 == '' && $error2 == '') {
        
        //creer csv
        $fs = fopen("users.csv", "a");

        // array avec les variable
        $form_data = array(
            $email1,
            $password
        );

        // ecrire sur le csv
        fputcsv($fs, $form_data, ";");
        $error = '<h3 class="text-success text-center">compte creer</h3>';
    }
}  