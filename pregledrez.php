<?php

require "dbBroker.php";
require "rezervacija.php";

session_start();



$rezultat=Rezervacija::getAll($conn);


    
    
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
                <li><a href="#">Pregled rezervacija</a></li>
                
                
            </ul>
<a class="btn" href="#"><button>Napravi rezervaciju</button></a>
        </div>
    </nav>
<h1>Postojece rezervacije</h1>
    

    <div class="tabelarez" >
        <table id="tabela" class="tabela" border="3" style=" background-color:rgb(90,90,90)">
            <thead class ="zaglavlje">
            <tr >
                <th scope="kolona" style="background-color:rgb(90,90,90) " >Gost</th>
                <th scope="kolona" style="background-color:rgb(90,90,90) " >Sala</th>    
                <th scope="kolona" style="background-color:rgb(90,90,90) " >Sto</th>
                <th scope="kolona" style="background-color:rgb(90,90,90) " >Datum</th>
                <th scope="kolona" style="background-color:rgb(90,90,90) " >Vreme</th>
                <th scope="kolona" style="background-color:rgb(90,90,90) " >Broj ljudi</th>
                <th scope="kolona" style="background-color:rgb(90,90,90) " >Prijavljeni korisnik</th>
            </tr>
            </thead>
            <tbody>
            <?php
                    while ($red = $rezultat->fetch_array()) :
                    ?>
                <tr >
                    <td><?php echo $red["gost"] ?></td>
                    <td><?php echo $red["sala"] ?></td>
                    <td><?php echo $red["sto"] ?></td>
                    <td><?php echo $red["datum"] ?></td>
                    <td><?php echo $red["vreme"] ?></td>
                    <td><?php echo $red["brojljudi"] ?></td>
                    <td><?php echo $red["user"] ?></td>
                    <td >
                        <label class="oznaci">
                        <input type="radio" name="cekiranje" value=<?php echo $red["id"] ?>>
                                    <span class="checkmark"></span>
                        </label>
                    </td>

                </tr>
                <?php
                    endwhile;    
                ?>
                
            </tbody>
        </table>
        <div class="row" >
            

            
            <div class="dugme1" >
                    <button id="btn-obrisi" type="button" formmethod="post" class="btn btn-danger">UKLONI</button>
                </div>
            

        </div>

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