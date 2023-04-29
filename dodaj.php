<?php
require "dbBroker.php";
require "rezervacija.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="pocetna.css" />
    <title>Miris Zavičaja</title>
  </head>

  <body>
    <nav class ="navbar">
        <div class="container">
            <img class= "logo" src="img\dr.jpg", alt = "logo">
            <ul class="nav">
            
                <li><a href="index.php">Prijavljivanje</a></li>
                <li><a href="pocetna.php">Početna</a> 
                <li><a href="pregledrez.php">Pregled rezervacija</a></li>
                <li><a href="#">Napravi rezervaciju</a></li>
                
            </ul>
          
        </div>
    </nav><div class="modal" id="prikaziModal"  role="dialog"  style=" background-color:#b9ebff">
    <div class="div12" style=" background-color:#b9ebff">

        
        <div class="modal-content" style=" background-color:white">
            
            <div class="div15">
                <div class="fprijava">
                    <form action="#" method="post" id="dodajForm">
                        <h1>Unos podataka o rezervaciji</h1>
                        <div class="row">
                            <div class="div16 ">
                                <div class="form-group">
                                    <label for="">Gost: </label>
                                    <input type="text"  name="gost" class="form-control"/> 
                                </div><br>
                                <div class="form-group">
                                    <label for="">Sala: </label>
                                    <input type="number"  name="sala" class="form-control"/> 
                                </div><br>
                                <div class="form-group">
                                    <label for="">Sto: </label>
                                    <input type="number"  name="sto" class="form-control"/> 
                                </div><br>
                                <div class="div18">
                                    <div class="form-group">
                                        <label for="">Datum: </label>
                                        <input type="date"   name="datum" class="form-control"/>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label for="">Vreme: </label>
                                    <input type="time"  name="vreme" class="form-control"/> 
                                </div><br>
                                
                                <div class="form-group">
                                    <label for="">Broj ljudi: </label>
                                    <input type="number"  name="brojljudi" class="form-control"/>
                                </div><br>
                                
                                
                                <div class="form-group">
                                        <button id="btnDodaj" type="submit" class="btn btn-success btn-block" >Zakaži</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
<br>
</br>

<footer class="footer-distributed">

<div class="footer-left">

  <img id="logofuter" src="img\dr.jpg" width="120px" height="120px">



  <p class="footer-company-name">Copyright © 2023, MirisZavicaja</p>
</div>

<div class="footer-center">

  <div>
    
    <p>
      <p>Kontaktirajte nas ili dodjite pravo u raj!
        <br>
</br>
      </p>
</br>

      <p>Vidikovacki Venac 12 <br>Beograd, Srbija </br></p>
</br>
  </div>

  <div>
    
    <p>+381 11 111111</p>
  </div>

  <div>
    
    <p>
      <a href="mailto:support@company.com">miriszavicaja@gmail.com</a>
    </p>
  </div>

</div>

<div class="footer-right">

  <div class="footer-icons">

  


  </div>

</div>

</footer>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="main.js"></script>

</body>
</html>