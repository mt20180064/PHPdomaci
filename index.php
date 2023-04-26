<?php

require "dbBroker.php";
require "user.php";

session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $uname = $_POST['username'];
    $upass = $_POST['password'];

   
    $korisnik = new User(1, $uname, $upass);
    
    $odg = User::ulogujSe($korisnik, $conn); 

    if($odg->num_rows==1){
        echo  `
        <script>
        console.log( "Uspešno ste se prijavili");
        </script>
        `;
        $_SESSION['user_id'] = $korisnik->id;
        header('Location: pocetna.php');
        exit();
    }else{
        echo `
        <script>
        console.log( "Niste se prijavili!");
        </script>
        `;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Prijava</title>
</head>
<body>
  
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Prijava</div>
      <div class="nasl">Aplikacija za rezervaciju mesta u restoranu "Miris zavičaja"</div>
      
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="1"
                          y1="193.49992"
                          x2="397"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#FF5733;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#390E05;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>




      <div class="form">
        
          <form method="POST" action="#">
            
                <label for="email">Korisnicko ime</label>
                <input type="text" id="email" name="username" class="form-control"  required>
                <label for="password">Lozinka</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <input type="submit" id="submit" class="btn btn-primary" name="submit" value="Prijavi se"></button>
            
          </form>
        
</div>
    </div>
    </div>
  </div>
</div>

</body>
</html>
