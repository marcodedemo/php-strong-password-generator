<?php 

session_start();

$_SESSION['passwordLength'] = $_GET['PasswordLength'];

include './partials/functions.php';


header('Location: ./password.php');