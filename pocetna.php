<?php
require "dbBroker.php";


session_start();
if (!isset($_SESSION['gost_id'])){
  header('Location:index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    

    <title>Miris Zavičaja</title>
  </head>

  <body>
    <nav class ="navbar">
        <div class="container">
            <img class= "logo" src="dr.jpg", alt = "logo">
            <ul class="nav">
                <li><a href="index.php">Prijavljivanje</a></li>
                <li><a href="#">Pregled rezervacija</a></li>
                <li><a href="#">Početna</a> 
                
            </ul>
<a class="btn" href="#"><button>Napravi rezervaciju</button></a>
        </div>
    </nav>
    <header>
    <div class ="container">
      
    </div>
    </header>