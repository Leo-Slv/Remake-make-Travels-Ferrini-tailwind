<?php
session_start(); 
error_reporting(E_ALL ^ E_WARNING);
ini_set('display_errors', 1) ;
if(!empty($_SESSION['id'])){
    $_SESSION['id'];
    $_SESSION['usuario'];
    require_once '../conect.php';
}
else{
    header("Location: logout.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="js/seePassword. js"></script>
   
    
</head>