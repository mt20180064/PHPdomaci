<?php
require "dbBroker.php";


session_start();
//if (!isset($_SESSION['user_id'])){
 // header('Location:index.php');
 // exit();
//}
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
                <li><a href="#">Početna</a> 
                <li><a href="pregledrez.php">Pregled rezervacija</a></li>
                
                
            </ul>
<a class="btn" href="#"><button>Napravi rezervaciju</button></a>
        </div>
    </nav>
    
    <header class="header">
        <div class="container">
            <div>
            <h1>Hrana po svačijem ukusu!</h1>
            <p1> Lorem Ipsum is simply dummy text 
                of the printing 
                and typesetting industry. 
                Lorem Ipsum has been the industry's 
                standard dummy t
                ext ever since the 1500s.
                 It has survived not only five 
                 centuries.
                  Ignore this, we will work on the 
                 content later. This is a random 
                 internet bullshit about lorem ipsum.
                  It was popularised
                   in the 1960s with the release 
                   of sth whatever Ok 
                  so now gjfdgjdfo whatever 
                  i write here
                   i feel like an idiot so
                    i should really stop.
        </p1>
              

            </div>
            <div class="slider-frame">
                <div class="slider-images">
                    <div class="img-container">
                        <img class="primer" src="img\w.jpg", alt = "hezira">
                    </div>
                    <div class="img-container">
                        <img class="primer" src="img\ww.jpg", alt = "hezira">
                    </div>
                    <div class="img-container">
                        <img class="primer" src="img\www.jpg", alt = "hezira">
                    </div>
                    <div class="img-container">
                        <img class="primer" src="img\wwww.jpg", alt = "hezira">
                    </div>
                    <div class="img-container">
                        <img class="primer" src="img\wwwwww.jpg", alt = "hezira">
                    </div>
                    <div class="img-container">
                        <img class="primer" src="img\wwwww.jpg", alt = "hezira">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="container">
            <img class="primer" src="img\mm.jpg", alt="sto">
            <div>
            <h1>Prijatan i nezaboravan ambijent</h1>
            <p1> gedfhadhfshgfsjsryjetdfbopfdbsfbsroprobndf
                bfrodrpnodtpnjdt
                njtfgmjgfmkfykmfykmygyf,kyt,gh,
                hdfjtdjerodgsejpogsjpogwjwhporjphoh
                hjopdrjspojspojkspokjpokhpodtkhpodktjpode
            </p1>
            <div>
            <form class="forma">
                <label>Šta vam je ostavilo najveci utisak u našem restoranu?</label>
                <br>
                <input type="radio" placeholder="choose" name="radioButton">ambijent
                <br>
                <input type="radio" placeholder="choose" name="radioButton">osoblje
                <br>
                <input type="radio" placeholder="choose" name="radioButton">kvalitet hrane
                <br>
                <input type="radio" placeholder="choose" name="radioButton">cena
            </form>
            </div>
            </div>
        </div>
    </div>
    </header>
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
</body>
</html>    