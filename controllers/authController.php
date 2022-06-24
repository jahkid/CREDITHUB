<?php

require 'config/db.php';

$errors = array();
$username = '';
$email = '';

// user clicks signup button
if (isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];


    // form input validations
    if(empty($username)){
        $errors['username'] = 'Username Required';
    } 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email address';
    }   
    if(empty($email)){
        $errors['email'] = 'Email Required';
    }   
    if(empty($password)){
        $errors['password'] = 'Password Required';
    }   
    if ($password !== $passwordConf) {
        $errors['password'] = 'Kindly check that you have matching passwords';
    }  

    $emailQuery = 'SELECT * FROM users WHERE email=?    LIMIT 1';
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);

}