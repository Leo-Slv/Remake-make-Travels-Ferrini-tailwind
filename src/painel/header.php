<?php
session_start(); 
error_reporting(E_ALL ^ E_WARNING);
ini_set('display_errors', 1) ;
if(!empty($_SESSION['id'])){
    $_SESSION['id'];
    $_SESSION['usuario'];
    require_once '../conect.php';
    require_once 'dialog.php';
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
    <link href="../css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />
</head>